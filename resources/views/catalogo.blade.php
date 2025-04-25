@extends('layouts.app') 
@section('content') 

<style>
  body {
    background-color:rgb(250, 202, 210);
  }

  .text-center {
    margin-bottom: 35px;
    font-size: 24px;
    font-weight: bold;
    color: #c71585;
    text-align: center;
  }

  .filters-box {
    background-color: white;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
  }

  .card-img-top {
    border-radius: 5px;
  }

  .col-md-4:hover {
    transition: transform 0.3s ease-in-out;
    transform: scale(1.05);
  }

  h5, label {
    color: #d63384;
  }

  .btn-success {
    background-color: #ff69b4;
    border-color: #ff69b4;
  }

  .btn-success:hover {
    background-color: #ff1493;
    border-color: #ff1493;
  }

  .btn-secondary {
    background-color: #f8c6d8;
    border-color: #f8c6d8;
    color: #6b003b;
  }

  .btn-secondary:hover {
    background-color: #f497b5;
    border-color: #f497b5;
    color: white;
  }

  .btn-pink {
    background-color: #ffb6c1;
    border-color: #ffb6c1;
    color: #6b003b;
  }
  .btn-pink:hover {
    background-color: #ff69b4;
    border-color: #ff69b4;
    color: white;
  }

  .card-title {
    color: #c71585;
  }

  .card-text {
    color: #5c0033;
  }

  #pagination button {
    border-color: #ff69b4;
    color: #ff69b4;
  }

  #pagination button:hover {
    background-color: #ffc0cb;
    color: white;
  }

  #pagination span {
    color: #d63384;
    font-weight: 600;
  }
</style>

<div class="container mt-4">
  <h1 class="text-center">🌸 Catalogo Fiori 🌼</h1>
  <div class="row">    
    <!-- COLONNA LATERALE: FILTRI -->
    <div class="col-md-3">
      <div class="filters-box">
        <h5>🔍 Filtra per:</h5>
        <!-- FORM DI FILTRAGGIO -->
        <form id="filter-form" class="row g-3">          
          <!-- FILTRO COLORE -->
          <div class="col-12">
            <label class="fw-bold">Colore:</label>
            <select name="color" class="form-select">
              <option value="">Tutti</option>
              <option value="Rosso">Rosso</option>
              <option value="Blu">Blu</option>
              <option value="Giallo">Giallo</option>
              <option value="Bianco">Bianco</option>
              <option value="Viola">Viola</option>
              <option value="Rosa">Rosa</option>
              <option value="Arancione">Arancione</option>
              <option value="Azzurro">Azzurro</option>              
            </select>
          </div>
          <!-- FILTRO STAGIONE -->
          <div class="col-12">
            <label class="fw-bold">Stagione:</label>
            <select name="season" class="form-select">
              <option value="">Tutte</option>
              <option value="Primavera">Primavera</option>
              <option value="Estate">Estate</option>
              <option value="Autunno">Autunno</option>
              <option value="Inverno">Inverno</option>
              <option value="Primavera-Estate">Primavera-Estate</option>
              <option value="Estate-Autunno">Estate-Autunno</option>
              <option value="Inverno-Primavera">Inverno-Primavera</option>
              <option value="Annuale">Annuale</option>
            </select>
          </div>
          <!-- FILTRO TIPO -->
          <div class="col-12">
            <label class="fw-bold">Tipo:</label>
            <select name="type" class="form-select">
            <option value="">Tutti</option>
              <option value="Perenne">Perenne</option>
              <option value="Annuale">Annuale</option>
              <option value="Bulbosa">Bulbosa</option>
              <option value="Arbustiva">Arbustiva</option>
              <option value="Epifita">Epifita</option>
              <option value="Rizomatoso">Rizomatoso</option> 
              <option value="Biennale">Biennale</option> 
              <option value="Rampicante">Rampicante</option>
            </select>
          </div>

          <!-- PULSANTE APPLICA FILTRI -->
          <div class="col-12">
            <button type="submit" class="btn btn-success w-100 mt-3">Filtra</button>
          </div>

          <!-- PULSANTE RESET FILTRI -->
          <div class="col-12">
            <button type="reset" id="reset-filters" class="btn btn-secondary w-100 mt-2">Reset Filtri</button>
          </div>
        </form>
      </div>  
      <!-- AGGIUNGI FIORE -->
      <div class="d-flex justify-content-end mb-3">
        <a href={{ url('/flowers/create') }} class="btn btn-success me-2">➕ Aggiungi Fiore</a>
      </div>      
    </div>

    <!-- COLONNA DESTRA: CATALOGO -->
    <div class="col-md-9">
      <!-- Contenitore per le card dei fiori -->
      <div id="flower-list" class="row row-cols-1 row-cols-md-3 g-4"></div>

      <!-- Paginazione -->
      <div id="pagination" class="d-flex justify-content-center mt-4"></div>
    </div>
  </div>
</div>

<!-- SCRIPT JAVASCRIPT PER IL CARICAMENTO AJAX -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {

  // Funzione per caricare i fiori (con paginazione e filtri)
  function loadFlowers(page = 1, filters = {}) {
    $.ajax({
      url: '/flowers?page=' + page, // URL della route con pagina
      method: 'GET',
      data: filters, // Invia i filtri al controller
      success: function(response) {
        let flowerList = $('#flower-list');
        flowerList.empty(); // Svuota prima di caricare nuovi fiori

        // Crea una card per ogni fiore
        response.data.forEach(flower => {
          let card = `
            <div class="col">
              <div class="card h-100">
                <a href="/flowers/${flower.id}"> 
                  <img src="${flower.image}" class="card-img-top" alt="${flower.name}" style="height: 200px; object-fit: cover;">
                </a>
                <div class="card-body">
                  <h5 class="card-title">${flower.name}</h5>
                  <p class="card-text">Colore: ${flower.color}</p>
                  <p class="card-text">Stagione: ${flower.season}</p>
                  <p class="card-text">Tipo: ${flower.type}</p>

                  <div class="d-flex justify-content-between mt-3">
                    <a href="/flowers/${flower.id}/edit" class="btn btn-sm btn-pink">✏️ Modifica</a>
                    <form method="POST" action="/flowers/${flower.id}" onsubmit="return confirm('Sicuro di voler eliminare questo fiore?');">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-sm btn-secondary">🗑️ Elimina</button>
                    </form>
                  </div>

                </div>
              </div>
            </div>`;
          flowerList.append(card); // Aggiunge la card alla lista
        });

        updatePagination(response); // Aggiorna i pulsanti di paginazione
        window.scrollTo(0, 0); // Torna in cima alla pagina
      }
    });
  }

  // Funzione per gestire la paginazione dinamica
  function updatePagination(response) {
    let pagination = $('#pagination');
    pagination.empty();

    // Se ci sono più pagine, mostra i pulsanti
    if (response.last_page > 1) {
      let firstPage = response.current_page > 1 
        ? `<button class="btn btn-outline-primary me-1" data-page="1"><<</button>` 
        : '';
      let prevPage = response.current_page > 1 
        ? `<button class="btn btn-outline-primary me-1" data-page="${response.current_page - 1}">⬅</button>` 
        : '';
      let nextPage = response.current_page < response.last_page 
        ? `<button class="btn btn-outline-primary ms-1" data-page="${response.current_page + 1}">➡</button>` 
        : '';
      let lastPage = response.current_page < response.last_page 
        ? `<button class="btn btn-outline-primary ms-1" data-page="${response.last_page}">>></button>` 
        : '';

      pagination.html(
        firstPage + 
        prevPage + 
        `<span class="mx-2">Pagina ${response.current_page} di ${response.last_page}</span>` + 
        nextPage + 
        lastPage
      );
    }
  }

  // Quando clicchi su una freccia di paginazione
  $(document).on('click', '#pagination button', function() {
    let page = $(this).data('page'); // Prende la pagina da caricare
    let filters = $('#filter-form').serialize(); // Prende i filtri attivi
    loadFlowers(page, filters); // Carica i fiori della nuova pagina
  });

  // Quando invii il form dei filtri
  $('#filter-form').submit(function(event) {
    event.preventDefault(); // Evita il refresh
    let filters = $(this).serialize(); // Ottiene tutti i filtri scelti
    loadFlowers(1, filters); // Carica i risultati con i filtri
  });

  // Quando clicchi su "Reset Filtri"
  $('#reset-filters').click(function() {
    $('#filter-form')[0].reset(); // Reset dei filtri
    loadFlowers(); // Ricarica tutti i fiori
  });

  // Al primo caricamento, mostra tutti i fiori
  loadFlowers();
});
</script>
@endsection
