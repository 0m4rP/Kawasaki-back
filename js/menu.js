class menumain extends HTMLElement {
    constructor(){
        super();
    }

    connectedCallback() {
        this.innerHTML = `<header>
        <nav>
            <div class="logos">
                <a href="../app/app.php"> <img src="../img/logo2.png" alt="simbolo" class="logo1"></a>
                <a href="../app/app.php"> <img src="../img/logo1.png" alt="kawasaki" class="logo2"></a>
            </div>
            <ul>
                <li>
                    <a href="../app/mantenimiento.php" class="item_menu">Mantenimientos</a>
                </li>
                <li>
                    <a href="../app/citas.php" class="item_menu">Agendamientos de citas</a>
                </li>
                <li>
                    <a href="../app/analitycs.php" class="item_menu">Analitycs</a>
                </li>
            </ul>
            <button class="campana">
                <i class="fa-solid fa-bell fa-2x"></i>
            </button>
            <a class="profile" href="../app/perfil.php">
                <i class="fa-solid fa-user fa-2x"></i>
            </a>               
        </nav>
        </header>
    
        `;
    }
}

window.customElements.define("menu-main", menumain);
