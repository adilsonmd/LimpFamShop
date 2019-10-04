<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
    <a class="navbar-brand" href="#">+/-</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/balance">Outra coisa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contato</a>
            </li>
        </ul>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/cart">Carrinho
                @if(1==1)
                <span class="badge badge-light">New</span>
                @endif</a>
            </li>
        </ul>
    </div>
</nav>