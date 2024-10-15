<style>
    .form-floating-transition .form-control:focus {
        border-color: var(--bs-primary); /* Cor primária definida pelo Bootstrap */
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25); /* Ajuste o box-shadow com a cor primária */
        outline: none;
    }

    .form-floating-transition label {
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .form-floating-transition input:not(:placeholder-shown) + label {
        transform: translateY(-1.5rem);
        opacity: 1;
    }

    .form-floating-transition input:placeholder-shown + label {
        opacity: 0.7;
    }

    /* Ajusta o ícone de lupa */
    .input-group .input-group-text {
        background-color: transparent;
        border: none;
        padding-left: 0.5rem;
    }

    .form-control-icon-placeholder {
        position: relative;
        padding-left: 2.5rem; /* Espaço para o ícone */
    }

    .form-control-icon-placeholder::before {
        content: url('https://cdn-icons-png.flaticon.com/512/54/54481.png'); /* URL de um ícone de lupa */
        position: absolute;
        left: 0.75rem;
        top: 50%;
        transform: translateY(-50%);
        opacity: 0.5;
    }
</style>

<form action="#">
    <div class="input-group form-floating form-floating-transition mx-auto">
        <!-- Ícone de lupa no início do input -->
        <input id="search-property-bar" type="text" class="form-control form-control-icon-placeholder" placeholder=" ">
        <label for="search-property-bar">Search property</label>

        <!-- Botão Search ao final do input -->
        <button id="btn-search-property" class="btn btn-primary" type="button">Search</button>
    </div>
</form>
