@extends('layouts.app')

@section('content')
<style>
    .navbar {
        display: none !important;
    }
    body {
        background-color: #f5fffa;
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
    <h2 class="mb-4 text-center">Calendario della Potatura</h2>
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
                </select>
                <button type="submit" class="btn btn-success w-100 mt-3">Filtra</button>
                <button type="reset" id="reset-filters" class="btn btn-secondary w-100 mt-2">Reset Filtri</button>
            </form>
    </div>
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
                @foreach ($piante as $pianta)
                    <tr>
                        <td class="table text-center align-middle fw-bold">
                            {{ $pianta['nome'] }}
                        </td>
                        @foreach (range(1, 12) as $mese)
                            <td class="col-mese col-{{ $mese }} {{ in_array($mese, $pianta['potatura']) ? 'p-0' : '' }}">
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterForm = document.getElementById('filter-form');
            const resetButton = document.getElementById('reset-filters');
            const monthSelect = document.querySelector('select[name="month"]');
            
            // Mappa i nomi dei mesi ai loro numeri (1-12)
            const monthMap = {
                'Gen': 1, 'Feb': 2, 'Mar': 3, 'Apr': 4, 
                'Mag': 5, 'Giu': 6, 'Lug': 7, 'Ago': 8, 
                'Set': 9, 'Ott': 10, 'Nov': 11, 'Dic': 12
            };

            // Gestione del submit del form
            filterForm.addEventListener('submit', function(e) {
                e.preventDefault();
                applyFilters();
            });

            // Gestione del reset
            resetButton.addEventListener('click', function() {
                // Resetta il select
                monthSelect.value = '';
                
                // Mostra tutto
                showAllColumnsAndRows();
            });

            function applyFilters() {
                const selectedMonth = monthSelect.value;
                
                if (!selectedMonth) {
                    // Se nessun mese è selezionato, mostra tutto
                    showAllColumnsAndRows();
                    return;
                }
                
                const monthNumber = monthMap[selectedMonth];
                
                // Nascondi tutte le colonne dei mesi
                document.querySelectorAll('.col-mese').forEach(col => {
                    col.style.display = 'none';
                });
                
                // Mostra solo la colonna del mese selezionato
                document.querySelectorAll(`.col-${monthNumber}`).forEach(col => {
                    col.style.display = '';
                });
                
                // Mostra sempre la colonna dei nomi
                document.querySelectorAll('th:first-child, td:first-child').forEach(col => {
                    col.style.display = '';
                });

                // Mostra solo le righe che hanno immagini nel mese selezionato
                document.querySelectorAll('tbody tr').forEach(riga => {
                    const cellaMese = riga.querySelector(`.col-${monthNumber}`);
                    if (cellaMese && cellaMese.querySelector('img')) {
                        riga.style.display = '';
                    } else {
                        riga.style.display = 'none';
                    }
                });
            }

            function showAllColumnsAndRows() {
                // Mostra tutte le colonne
                document.querySelectorAll('.col-mese').forEach(col => {
                    col.style.display = '';
                });
                
                // Mostra tutte le righe
                document.querySelectorAll('tbody tr').forEach(riga => {
                    riga.style.display = '';
                });
            }
            
            // Applica i filtri all'avvio se ci sono parametri nell'URL
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('month')) {
                const monthParam = urlParams.get('month');
                if (monthMap.hasOwnProperty(monthParam)) {
                    monthSelect.value = monthParam;
                    applyFilters();
                }
            }
        });
    </script>
</div>
@endsection
