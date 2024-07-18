<header class="top">
    <div class="container">
        {{-- <p>081321455855</p> --}}
        <div id="clock-container" style="
        display: flex;
        justify-content: center;
        align-items: center;
        height: 6vh;
        font-family: Arial, sans-serif;">
        <p id="jam" style="
            font-size: 14px;
            background: #00008b;
            color: #fff;
            padding: 2px 10px;
            border-radius: 15px;
            text-align: center;"></p>
    </div>

    <script>
        function updateClock() {
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            const day = now.getDate().toString().padStart(2, '0');
            const month = (now.getMonth() + 1).toString().padStart(2, '0'); // Months are zero-based
            const year = now.getFullYear();

            const timeString = `${hours}:${minutes}:${seconds}`;
            const dateString = `${day}/${month}/${year}`;
            document.getElementById('jam').textContent = `${dateString} ${timeString}`;
        }

        setInterval(updateClock, 1000); // Update every second
        updateClock(); // Initial call to set the time immediately
    </script>
     <p><a href="https://wa.me/6281321455855">+6281 321 455 855</a></p>
     {{-- <p>support@Construct.com</p> --}}
     <p>Senin-Jumat 9:00-16:00</p>
    
        {{-- <p>Jam </p> --}}
        <div class="social">
            <a href="" title="Email"><i class="fas fa-envelope"></i></a>
            <a href="" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="" title="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="" title="TikTok"><i class="fab fa-tiktok"></i></a>
            <a href="" title="YouTube"><i class="fab fa-youtube"></i></a>

        </div>
    </div>
</header>
