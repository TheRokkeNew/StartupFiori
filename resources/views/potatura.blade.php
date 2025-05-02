@extends('layouts.app')
@section('content')
<style>
    body {
        background-color:rgb(200, 245, 222);
    }
    table {
        table-layout: auto !important;
        max-width: 100%;
        border-collapse: collapse; 
        border: 2px solid #aaa; 
    }
    th, td {
        white-space: nowrap; 
        vertical-align: middle;
        border: 3px solid #aaa;
    }
    .img-pianta {
        width: 87px;
        height: 87px;
        object-fit: cover;
        display: block;
        border: none;
        background: none;
    }
    .hidden-column {
        display: none;
    }
</style>

<div class="container my-4 body-bg">
    <h2 class="mb-4 text-center">Calendario per la potatura di piante e alberi</h2>
    
    <div class="alert alert-info">
        ✅ <strong>Alberi da frutto:</strong> Inverno (potatura di formazione) o estate (diradamento)<br>
        ✅ <strong>Piante da fiore:</strong> Dopo la fioritura per non perdere i boccioli<br>
        ✅ <strong>Sempreverdi:</strong> Fine inverno/inizio primavera (Marzo-Aprile)<br>
        ❌ <strong>Da evitare:</strong> Potature in autunno (rischio di gelate e malattie)
    </div>
    
    <div class="mb-3 text-center">
        <h5>Filtra per Mese:</h5>
        <form id="filter-form">
            <select name="month" class="form-select">
                <option value="">Tutti</option>
                <option value="Gen">Gen</option>
                <option value="Feb">Feb</option>
                <option value="Mar">Mar</option>
                <option value="Apr">Apr</option>
                <option value="Mag">Mag</option>
                <option value="Giu">Giu</option>
                <option value="Lug">Lug</option>
                <option value="Ago">Ago</option>
                <option value="Set">Set</option>
                <option value="Ott">Ott</option>
                <option value="Nov">Nov</option>
                <option value="Dic">Dic</option>
            </select>

            <button type="submit" class="btn btn-success w-100 mt-3">Filtra</button>
            <button type="reset" id="reset-filters" class="btn btn-secondary w-100 mt-2">Reset Filtri</button>
        </form>
    </div>
    
    <!--Tabella calendario-->
    <div class="table-responsive" style="overflow-x: auto;">
        <table class="table table-bordered text-center align-middle">
            <thead class="table-success">
                <tr>
                    <th scope="col">Piante e alberi</th>
                    @foreach (['Gen','Feb','Mar','Apr','Mag','Giu','Lug','Ago','Set','Ott','Nov','Dic'] as $index => $mese)
                        <th scope="col" class="col-mese col-{{ $index + 1 }}">{{ $mese }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <!--Loop attraverso tutte le piante-->
                @foreach ($piante as $pianta)
                    <tr>
                        <td class="table text-center align-middle fw-bold">
                            {{ $pianta['nome'] }}
                        </td>
                        @foreach (range(1, 12) as $mese)
                            <td class="col-mese col-{{ $mese }} {{ in_array($mese, $pianta['potatura']) ? 'p-0' : '' }}">
                                <!--Mostra immagine solo se il mese è nel periodo di potatura-->
                                @if (in_array($mese, $pianta['potatura']))
                                    <img src="{{ asset('images/piante/' . ($pianta['immagine'] ?? 'default.png')) }}" 
                                        alt="{{ $pianta['nome'] }}"
                                        class="img-pianta"
                                        loading="lazy">
                                @endif
                            </td>
                        @endforeach                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <!--gestione dei filtri-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            //riferimenti agli elementi del form
            const filterForm = document.getElementById('filter-form');
            const resetButton = document.getElementById('reset-filters');
            const monthSelect = document.querySelector('select[name="month"]');
            
            //mappa i nomi dei mesi ai loro numeri
            const monthMap = {
                'Gen': 1, 'Feb': 2, 'Mar': 3, 'Apr': 4, 
                'Mag': 5, 'Giu': 6, 'Lug': 7, 'Ago': 8, 
                'Set': 9, 'Ott': 10, 'Nov': 11, 'Dic': 12
            };

            //festione del submit del form
            filterForm.addEventListener('submit', function(e) {
                //previene il ricaricamento della pagina
                e.preventDefault(); 
                //applica i filtri
                applyFilters(); 
            });

            //gestione del reset
            resetButton.addEventListener('click', function() {
                //Resetta il select
                monthSelect.value = '';                
                //mostra tutte le colonne e righe
                showAllColumnsAndRows();
            });

            //applicare i filtri
            function applyFilters() {
                const selectedMonth = monthSelect.value;                
                //se nessun mese è selezionato, mostra tutto
                if (!selectedMonth) {
                    showAllColumnsAndRows();
                    return;
                }
                
                //converti il nome del mese in numero 
                const monthNumber = monthMap[selectedMonth];
                
                //nascondi tutte le colonne dei mesi
                document.querySelectorAll('.col-mese').forEach(col => {
                    col.style.display = 'none';
                });
                
                //mostra solo la colonna del mese selezionato
                document.querySelectorAll(`.col-${monthNumber}`).forEach(col => {
                    col.style.display = '';
                });
                
                //mostra sempre la colonna dei nomi
                document.querySelectorAll('th:first-child, td:first-child').forEach(col => {
                    col.style.display = '';
                });

                //filtra le righe: mostra solo quelle con immagini nel mese selezionato
                document.querySelectorAll('tbody tr').forEach(riga => {
                    const cellaMese = riga.querySelector(`.col-${monthNumber}`);
                    if (cellaMese && cellaMese.querySelector('img')) {
                        //mostra riga
                        riga.style.display = ''; 
                    } else {
                        //nascondi riga
                        riga.style.display = 'none'; 
                    }
                });
            }

            //mostra tutte le colonne e righe
            function showAllColumnsAndRows() {
                //mostra tutte le colonne
                document.querySelectorAll('.col-mese').forEach(col => {
                    col.style.display = '';
                });
                
                //mostra tutte le righe
                document.querySelectorAll('tbody tr').forEach(riga => {
                    riga.style.display = '';
                });
            }
            
            //applica i filtri all'avvio se ci sono parametri nell'URL
            const urlParams = new URLSearchParams(window.location.search);
            //verifica se è presente il parametro 'month' nell'URL
            if (urlParams.has('month')) {
                //ottiene il valore del parametro 'month'
                const monthParam = urlParams.get('month');
                //controlla se il valore ricevuto esiste in un oggetto monthMap
                if (monthMap.hasOwnProperty(monthParam)) {
                    //imposta il valore di un dropdown select con l'ID 'monthSelect'
                    monthSelect.value = monthParam;
                    //applica i filtri in base al mese selezionato
                    applyFilters();
                }
            }
        });
    </script>
</div>
@endsection