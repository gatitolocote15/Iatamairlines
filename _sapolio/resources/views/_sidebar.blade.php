<nav id="sidebar" class="navbar-light bg-dark"">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="pt-4 fs-5 align-items-center text-center">
            <img src="{{ asset('img/gisselle.png') }}" class="rounded-circle" style="width: 75px;">
            <div>
                <span class="nav-link-text">Usuario: {{ auth()->user()->usuario }}</span>
            </div>
            <div class="nav-item">
                <span class="nav-link-text">Rango: {{ auth()->user()->rango == 5 ? 'Admin' : 'User' }}</span>
            </div>
        </div>
        <div class="navbar-inner">
            <div class="navbar-collapse">
                <hr class="my-3">
                <ul class="navbar-nav">
                    @if (auth()->user()->rango >= 5)
                        <li class="nav-item">
                            <a class="nav-link" href="./users">
                                <i class="fas fa-user-cog text-warning"></i>
                                <span class="nav-link-text">Usuarios</span>
                            </a>
                        </li>
                    @endif

                    <li class="nav-item">
                        <a class="nav-link " href="./news">
                            <i class="fa fa-exclamation-triangle text-warning"></i>
                            <span class="nav-link-text">Nuevos</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./live">
                            <i class="fas fa-clipboard-check text-success"></i>
                            <span class="nav-link-text">Válidos</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./notes">
                            <i class="fas fa-clipboard-list text-primary"></i>
                            <span class="nav-link-text">Notas</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./trash">
                            <i class="fas fa-trash text-primary"></i>
                            <span class="nav-link-text">Basura</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./telegram">
                            <i class="fab fa-telegram-plane text-danger"></i>
                            <span class="nav-link-text">My Telegram</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./generator">
                            <i class="fas fa-comment-alt text-danger"></i>
                            <span class="nav-link-text">Generador #</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="generarLink()">
                            <i class="fas fa-copy text-danger"></i>
                            <span class="nav-link-text">Generar Link</span>
                        </a>
                    </li>
                </ul>
                <hr class="my-3">
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="./logout">
                            <i class="fas fa-sign-out-alt text-danger"></i>
                            <span class="nav-link-text">Salir</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

