<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo Fiori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
            /* Stile per il contenitore dei filtri */
            .row {
                position: relative;
                left: -10px; /* Sposta i filtri più a sinistra */
                padding: 10px;
                background-color: #f8f9fa;
                border-radius: 8px;
                box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            }

            /* Spaziatura tra il titolo e il catalogo */
            .text-center {
                margin-bottom: 35px; /* Maggiore distanza dal catalogo */
                font-size: 24px;
                font-weight: bold;
                color: #333;
                text-align: center;
            }

            /* Stile per le immagini del catalogo */
            .card-img-top {
                border-radius: 5px;
            }

            .col-md-4:hover {
                transition: transform 0.3s ease-in-out;
                transform: scale(1.05); /* Effetto zoom al passaggio del mouse */
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
            <h5>🔍 Filtra per:</h5>
            <form id="filter-form">
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

                <label class="fw-bold mt-2">Stagione:</label>
                <select name="season" class="form-select">
                    <option value="">Tutte</option>
                    <option value="Primavera">Primavera</option>
                    <option value="Estate">Estate</option>
                    <option value="Autunno">Autunno</option>
                    <option value="Inverno">Inverno</option>
                    <option value="Annuale">Tutto l'anno</option>
                </select>

                <label class="fw-bold mt-2">Tipo:</label>
                <select name="type" class="form-select">
                    <option value="">Tutti</option>
                    <option value="Perenne">Perenne</option>
                    <option value="Bulbosa">Bulbosa</option>
                    <option value="Epifita">Epifita</option>
                    <option value="Arbustiva">Arbustiva</option>
                    <option value="Annuale">Annuale</option>
                </select>

                <button type="submit" class="btn btn-success w-100 mt-3">Filtra</button>
                <button type="reset" id="reset-filters" class="btn btn-secondary w-100 mt-2">Reset Filtri</button>
            </form>
        </div>

        <!-- Griglia Catalogo -->
        <div class="col-md-9">
            <div id="flower-list" class="row"></div>
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
                        <div class="col-md-4">
                            <div class="card">
                                <a href="/flowers/${flower.id}">
                                    <img src="/${flower.image}" class="card-img-top" alt="${flower.name}">
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

                // Scrolla in cima alla pagina ogni volta che si cambia pagina
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
