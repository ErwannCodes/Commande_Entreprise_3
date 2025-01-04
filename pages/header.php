<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
</head>

<body>
    <header class="navigation">
        <div class="logo-section">
            <a href="/index.php">
                <img src="/assets/images/Logo_MRB.jpg" alt="Logo MRB" class="logo">
            </a>
        </div>

        <button class="hamburger" id="hamburger" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="main-nav hidden" id="main-nav">
            <ul>
                <li><a href="/pages/presentation.php">Bienvenue</a></li>
                <li><a href="/pages/activities.php">Activités</a></li>
                <li><a href="/pages/expos.php">Expos & Programme</a></li>
                <li><a href="/pages/tiersLieu.php">Le Tiers-lieu</a></li>
                <li><a href="/pages/savoir.php">Savoir-faire</a></li>
                <li><a href="/pages/support.php">Nous soutenir</a></li>
                <li><a href="/pages/contact.php">Contact</a></li>
            </ul>
        </nav>

        <div class="main-nav" id="main-nav">
            <div class="left-nav">
                <ul>
                    <li><a href="/pages/presentation.php">Bienvenue</a></li>
                    <li><a href="/pages/activities.php">Activités</a></li>
                    <li><a href="/pages/expos.php">Expos & Programme</a></li>
                </ul>
            </div>
            <div class="right-nav">
                <ul>
                    <li><a href="/pages/tiersLieu.php">Le Tiers-lieu</a></li>
                    <li><a href="/pages/savoir.php">Savoir-faire</a></li>
                    <li><a href="/pages/support.php">Nous soutenir</a></li>
                    <li><a href="/pages/contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>

    <script>
        const hamburger = document.getElementById("hamburger");
        const nav = document.getElementById("main-nav");
        const mediaQuery = window.matchMedia("(max-width: 875px)");

        // Function to toggle menu visibility
        function toggleMenu() {
            if (mediaQuery.matches) {
                nav.classList.toggle("hidden");
                nav.classList.toggle("show");
                hamburger.classList.toggle("close");
            }
        }

        // Ensure the menu is reset when resizing above 875px
        function handleResize() {
            if (!mediaQuery.matches) {
                nav.classList.add("hidden");
                nav.classList.remove("show");
                hamburger.classList.remove("close");
            }
        }

        // Event listeners
        hamburger.addEventListener("click", toggleMenu);
        window.addEventListener("resize", handleResize);

        </script>
</body>

</html>
