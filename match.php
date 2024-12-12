<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="navbar">
        <div class="logo">
            <img src="./media/logo/chelsea.png">
        </div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="match.php">Match</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="merch.php">Merch</a></li>
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
                <img src="./media/logo/arsenal.png">
                <span class="vs">VS</span>
                <img src="./media/logo/chelsea.png">
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
                <img src="./media/logo/premier.png">
                <div>
                    <p>Arsenal VS Chelsea</p>
                    <p>02:00 PM - Stamford Bridge</p>
                </div>
                <button class="buy-ticket">Buy Ticket</button>
                </div>
                <div class="match-card">
                <img src="./media/logo/premier.png">
                <div>
                    <p>Chelsea VS Man City</p>
                    <p>02:00 PM - Stamford Bridge</p>
                </div>
                <button class="buy-ticket">Buy Ticket</button>
                </div>
                <div class="match-card">
                <img src="./media/logo/premier.png">
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
                <img src="./media/logo/premier.png">
                <div>
                    <p>Man Utd VS Chelsea</p>
                    <p>FULL TIME - WIN</p>
                </div>
                </div>
                <div class="match-card">
                <img src="./media/logo/premier.png">
                <div>
                    <p>Aston Villa VS Chelsea</p>
                    <p>FULL TIME - WIN</p>
                </div>
                </div>
                <div class="match-card">
                <img src="./media/logo/premier.png">
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