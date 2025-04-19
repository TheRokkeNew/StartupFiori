@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catalogo Fiori</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
    body {
      background-color: #fff0f5;
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
</head>
<body>

<div class="container mt-4">
  <a href="{{ url('/catalogo') }}">
    <h1 class="text-center">🌸 Catalogo Fiori 🌼</h1>
  </a>

  <div class="row">
    <!-- Sidebar Filtri -->
    <div class="col-md-3">
      <div class="filters-box">
        <h5>🔍 Filtra per:</h5>
        <form id="filter-form" class="row g-3">
          <div class="col-12">
            <label class="fw-bold">Colore:</label>
            <select name="color" class="form-select">
              <option value="">Tutti</option>
              <option value="Rosso">Rosso</option>
              <option value="Giallo">Giallo</option>
              <option value="Viola">Viola</option>
              <option value="Bianco">Bianco</option>
              <option value="Azzurro">Azzurro</option>
              <option value="Blu">Blu</option>
              <option value="Rosa">Rosa</option>
            </select>
          </div>

          <div class="col-12">
            <label class="fw-bold">Stagione:</label>
            <select name="season" class="form-select">
              <option value="">Tutte</option>
              <option value="Primavera">Primavera</option>
              <option value="Estate">Estate</option>
              <option value="Autunno">Autunno</option>
              <option value="Inverno">Inverno</option>
              <option value="Annuale">Tutto l'anno</option>
            </select>
          </div>

          <div class="col-12">
            <label class="fw-bold">Tipo:</label>
            <select name="type" class="form-select">
              <option value="">Tutti</option>
              <option value="Perenne">Perenne</option>
              <option value="Bulbosa">Bulbosa</option>
              <option value="Epifita">Epifita</option>
              <option value="Arbustiva">Arbustiva</option>
              <option value="Annuale">Annuale</option>
            </select>
          </div>

          <div class="col-12">
            <button type="submit" class="btn btn-success w-100 mt-3">Filtra</button>
          </div>
          <div class="col-12">
            <button type="reset" id="reset-filters" class="btn btn-secondary w-100 mt-2">Reset Filtri</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Catalogo -->
    <div class="col-md-9">
      <div id="flower-list" class="row row-cols-1 row-cols-md-3 g-4"></div>
      <div id="pagination" class="d-flex justify-content-center mt-4"></div>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {
  function loadFlowers(page = 1, filters = {}) {
    $.ajax({
      url: '/catalogo?page=' + page,
      method: 'GET',
      data: filters,
      success: function(response) {
        let flowerList = $('#flower-list');
        flowerList.empty();

        response.data.forEach(flower => {
          let card = `
            <div class="col">
              <div class="card h-100">
                <a href="/flowers/${flower.id}">
                  <img src="/${flower.image}" class="card-img-top" alt="${flower.name}" style="height: 200px; object-fit: cover;">
                </a>
                <div class="card-body">
                  <h5 class="card-title">${flower.name}</h5>
                  <p class="card-text">Colore: ${flower.color}</p>
                  <p class="card-text">Stagione: ${flower.season}</p>
                  <p class="card-text">Tipo: ${flower.type}</p>
                </div>
              </div>
            </div>`;
          flowerList.append(card);
        });

        updatePagination(response);
        window.scrollTo(0, 0);
      }
    });
  }

  function updatePagination(response) {
    let pagination = $('#pagination');
    pagination.empty();

    if (response.last_page > 1) {
      let prevPage = response.current_page > 1 
        ? `<button class="btn btn-outline-primary me-2" data-page="${response.current_page - 1}">⬅</button>` 
        : '';
      let nextPage = response.current_page < response.last_page 
        ? `<button class="btn btn-outline-primary ms-2" data-page="${response.current_page + 1}">➡</button>` 
        : '';

      pagination.html(prevPage + ` <span>Pagina ${response.current_page} di ${response.last_page}</span> ` + nextPage);
    }
  }

  $(document).on('click', '#pagination button', function() {
    let page = $(this).data('page');
    let filters = $('#filter-form').serialize();
    loadFlowers(page, filters);
  });

  $('#filter-form').submit(function(event) {
    event.preventDefault();
    let filters = $(this).serialize();
    loadFlowers(1, filters);
  });

  $('#reset-filters').click(function() {
    $('#filter-form')[0].reset();
    loadFlowers();
  });

  loadFlowers();
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection


