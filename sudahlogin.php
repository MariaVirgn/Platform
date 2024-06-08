<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celestical</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('style2.css');?>">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>Celestical Salon</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#courses">About</a></li>
                    <li><a href="#tutors">Treatment</a></li>
                    <li><a href="#Booking">Booking</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img src="logosalon.png"/>
            <div class="kolom">
                <p class="deskripsi">CelesticalSalon</p>
                <h2>Come take care of your hair</h2>
                <p><a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>

        <!-- untuk courses -->
        <section id="courses">
            <div class="kolom">
                <p class="deskripsi">You Will Need This</p>
                <h2>Tentang Kami</h2>
                <p>Celestical Salon was formed in 2022, Celestical Salon provides special hair care: hairwash, haircuts and coloring</p>
                <p><a href="" class="tbl-biru">Pelajari Lebih Lanjut</a></p>
            </div>
            <img src="logosalon.png"/>
        </section>

        <!-- untuk tutors -->
        <section id="tutors">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Our Treatment</p>
                    <h2>Treatment</h2>
                    <p>Kami juga menyediakan beberapa treatment!</p>
                </div>

                <div class="tutor-list">
                    <div class="kartu-tutor">
                        <img src="https://i.pinimg.com/564x/86/d2/4f/86d24f4f20ad6df669f63062d07b085a.jpg"/>
                        <p>HairCut</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="https://i.pinimg.com/564x/ce/5e/71/ce5e7101e4eccd6a9f9f9e9a34631cac.jpg"/>
                        <p>HairWash</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="https://i.pinimg.com/564x/4e/90/8b/4e908bed13d5a71354e1e08c67f76b6a.jpg"/>
                        <p>Hair Coloring</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Booking -->
        <section id="Booking">
        <div class="container">
        <form class="booking-form">
            <h2>Let's Book your treatment!</h2>
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="tel" name="phone" placeholder="Phone Number" required>
            <input type="date" name="date" placeholder="Preferred Date" required>
            <input type="time" name="time" placeholder="Preferred Time" required>
            <select name="service" required>
                <option value="" disabled selected>Select Service</option>
                <option value="haircut">Haircut</option>
                <option value="hairwash">Hairwash</option>
                <option value="haircoloring">Hair Coloring</option>
                <!-- Add more services as needed -->
            </select>
            <textarea name="notes" placeholder="Additional Notes"></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
    </section>

    <!-- Contact -->
    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Jl. Bersama Kamu </p>
                    <p>Kode Pos: 57365</p>
                </div>
                <div class="footer-section">
                    <h3>Social</h3>
                    <p><b>Instagram </b>Celestical.salon</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2022. <b>CelesticalSalon.</b> All Rights Reserved.
        </div>
    </div>
    
</body>
</html>