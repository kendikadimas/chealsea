<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="navbar">
        <div class="logo">
            <img src="logo.png">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="match.php">Match</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="merch.php">Merch</a></li>
                <li><a href="halloffame.php">Hall of Fame</a></li>
                <li><a href="history.php">History</a></li>
            </ul>
        </nav>
        <button class="login-btn">Login</button>
    </header>

    <main class="content1">
        <section class="next-match">
        <h2>Next Up</h2>
            <div class="match-info">
                <p>Stamford Bridge</p>
                <div class="teams">
                <img src="arsenal.png" alt="Arsenal Logo">
                <span class="vs">VS</span>
                <img src="chelsea.png" alt="Chelsea Logo">
                </div>
                <p class="time">02:00 PM</p>
                <p class="date">Sunday 8 December, 2024</p>
            </div>
        <button class="buy-ticket">Buy Ticket</button>
        </section>

        <section class="upcoming-matches">
        <h2>Watch Our Next Match!</h2>
            <div class="match-list">
                <div class="match-card">
                <img src="premier-league.png" alt="Premier League Logo">
                <div>
                    <p>Arsenal VS Chelsea</p>
                    <p>02:00 PM - Stamford Bridge</p>
                </div>
                <button class="buy-ticket">Buy Ticket</button>
                </div>
                <div class="match-card">
                <img src="premier-league.png" alt="Premier League Logo">
                <div>
                    <p>Chelsea VS Man City</p>
                    <p>02:00 PM - Stamford Bridge</p>
                </div>
                <button class="buy-ticket">Buy Ticket</button>
                </div>
                <div class="match-card">
                <img src="premier-league.png" alt="Premier League Logo">
                <div>
                    <p>Everton VS Chelsea</p>
                    <p>02:00 PM - Stamford Bridge</p>
                </div>
                <button class="buy-ticket">Buy Ticket</button>
                </div>
            </div>
        </section>

        <section class="previous-matches">
            <h2>Previous Match!</h2>
            <div class="match-list">
                <div class="match-card">
                <img src="premier-league.png" alt="Premier League Logo">
                <div>
                    <p>Man Utd VS Chelsea</p>
                    <p>FULL TIME - WIN</p>
                </div>
                </div>
                <div class="match-card">
                <img src="premier-league.png" alt="Premier League Logo">
                <div>
                    <p>Aston Villa VS Chelsea</p>
                    <p>FULL TIME - WIN</p>
                </div>
                </div>
                <div class="match-card">
                <img src="premier-league.png" alt="Premier League Logo">
                <div>
                    <p>Chelsea VS Liverpool</p>
                    <p>FULL TIME - LOSE</p>
                </div>
                </div>
                </div>
            </section>
    </main>
</body>
</html>