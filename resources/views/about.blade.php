<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LCC - About Us</title>

    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('auth/images/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('default/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
        }


        
        header img {
            width: 50%; /* Makes the image take the full width of its container */
            height: auto; /* Maintains the aspect ratio */
            max-width: 50%; /* Prevents image from exceeding the container's width */
        }

        .about-left h4,
        .contact-right h4 {
            font-weight: 700;
            margin-bottom: 10px;
        }

        .about-left p,
        .contact-right p {
            margin-bottom: 20px;
        }

        .course-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            padding: 15px;
            overflow: hidden;
            position: relative;
        }

        .course-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .learn-btn {
            background-color: #000080;
            border: none;
        }

        .learn-btn:hover {
            background-color: #FEC653;
            color: #000;
        }

        .dark-mode {
            background-color: #121212 !important;
            color: white !important;
        }

        .dark-mode .course-card {
            background-color: #1e1e1e;
            color: #fff;
        }

        .dark-mode .learn-btn {
            background-color: #FEC653;
            color: #000;
        }

        .dark-toggle {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #000080;
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 20px;
            z-index: 9999;
            transition: background-color 0.3s ease;
        }

        .dark-mode .text-muted {
            color: #ffffff !important;
        }

        .dark-toggle:hover {
            background-color: #FEC653;
            color: #000;
        }

        .dark-mode .form-check-label {
            color: white !important;
        }

        .dark-mode header h1 {
            color: #FEC653 !important;
        }

        .nav-link.active {
            color: #FEC653 !important;
        }

    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img style="height: 60px" alt=""> &nbsp; LA CONCEPCION COLLEGE
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin/admin_login">Admin Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="/login">Examiners Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Us and Contact Us Section -->
    <div class="container">
        
        <h3 class="mt-5 p-5 text-center">📜 About Us</h3>
        <div class="form-check form-switch ">
            <input class="form-check-input" type="checkbox" role="switch" id="darkToggle">
            <label class="form-check-label text-dark" for="darkToggle">Dark Mode</label>
        </div>
        <header>
            <img src="{{ asset('default/about.png') }}" class="image-fluid" alt="">
        </header>
        <p>Founded in 1998, La Concepcion College (LCC) is a private non-sectarian higher education institution with a young nucleus of rich academic, cultural, and athletic achievements offering academic programs from Pre-school, Elementary, High School, Vocational, to College Courses located in the heart of the fast-growing City of San Jose del Monte, Bulacan, Philippines</p>


        <div class="row mt-4">
            <!-- About Us Section (Left) -->
            <div class="col-lg-6 col-md-12">
                <div class="about-left">
                    <h4>LCC History</h4>
                    <p>La Concepcion College, Inc. (LCC) is founded in 1998, a non-sectarian higher education institution with a young nucleus of rich academic, cultural, and athletic achievements offering academic programs from Pre-Kindergarten, Elementary, Junior High School, Senior High School, Vocational, to College Courses, the school is strategically situated in the heart of the fast-growing City of San Jose del Monte, Bulacan, Philippines.</p>
                     <h5><b>Humble Beginnings</b></h5>
                     <p>LCC takes pride in its founders who are experienced educators and leaders. LCC is a product of good chemistry of the spouses Mr. Francisco C. Magpantay from Batangas and Dr. Loreto F. Magpantay from Ilocos Sur.
                     The drive of putting up a school comes naturally to Dr. Loreto F. Magpantay. Her early experiences as a classroom teacher in a public school enabled her to have first-hand experiences of the prevailing congestion and other issues in public schools. Dr. Magpantay believed that there is great power in education for the development of our nation, and the attainment of this power should not be hindered, rather it should be supported. While on the other hand, Mr. Francisco C. Magpantay, who is a natural leader with professional experiences as a policeman in the Philippine Constabulary, is known for his good people skills. He has been a consistent leader in most of the associations he belongs to. With limited funds but with high hopes of helping his neighbors, he put up a two-story commercial building in their own house located the heart of Barangay Narra Francisco Homes, City of San Jose del Monte, Bulacan. Various types of businesses rented stalls and rooms, but a certain room is vacant for some time, no one seemed to be interested to occupy.<p>
                     <p>Coming from two different professional backgrounds, the spouses’ individual endeavors turned out to be a synergy. Despite the limited funds, the founders’ strong guts, determination, and heart of a genuine educator and leader, Dr. Magpantay and Mr. Magpantay braved to put up a school. The vacant room in commercial building marks the history of La Concepcion College, Inc. The humble beginnings of LCC commenced in 1997 with the establishment of a daycare center in a 47 square meters vacant room. The name of the school was Little Angels’ Daycare Center in 1997. With seventeen (17) pioneer pupils, the daycare center was graced with its first teacher, Ms. Nancy P. Magkilat and sometimes voluntarily assisted by one of the dynamic parents, Ms. Maria Luisa E. Estopace, who then becomes part of the school and played a key element in the growth of LCC.
                    A year after, due to positive, encouraging feedback, and demand of the parents for a higher level of learning, on February 28, 1998, the daycare center developed into a formal school. A new school name was coined after the birth date of the founder’s first daughter, Ms. Noime F. Magpantay – December 8 or the Feast of the Immaculate Conception. Hence, the name of the school was La Concepcion Learning Academy (LCLA) that is awarded the Government Recognition by the then Department of Education Culture and Sports (DECS).</p>
                    <h5><b>The Birth of LCC</b></h5>
                    <p>In 2001, due to the hard work of the administrators, teaching, and non-teaching staff, collegiate courses were offered and finally La Concepcion College, Inc.(LCC) was established as approved by the Commission on Higher Education (CHED). LCC is one of the pioneering tertiary education institutions in Francisco Homes and in the City of San Jose Del Monte, Bulacan. The desire of founders to help those self-supporting students who are in dire need of assistance made way to establish a college that openly accommodates high school and college working students. Both of the founders came from the same situation, and believe that these students should be supported. The College is truly an oasis of less-privileged yet high potential students.
                    In 2006 with LCC’s dynamic College Dean, Dr. Nestor Edilberto Costales Jr., LCC had its major era; noted college degree and technical programs were granted with Government Recognitions from CHED and TESDA.
                    Also in 2006, a new, wider and more accessible additional campus in Kaypian Road, corner Quirino Highway was acquired. A record-breaking first year of operation was noted, offering primary, secondary, and tertiary courses, the population of the College reached a thousand in its first year of operation.
                    At a very young age, and with its two campuses (Francisco Homes Campus and Kaypian Campus), LCC takes pride producing top of the line graduates and winners with highly competitive knowledge and skills. This accomplishment is evidenced by the high performance of its graduates in the licensure examinations, particularly in the field of education and criminology, well-employed graduates, and continuous championships in academic, sports, and cultural in competitions.</p>

                    <h4>Vision and Mission</h4>
                    <p class="text-center">La Concepcion College envisions herself to be one of the forefront educational institutions that serves as catalyst of change for the holistic development of the community, the country, and the ASEAN region. <br><br>

Inspired by the motherly care and ideals of Mary Immaculate Conception and guided by the core values that befits a true LCCian, LCC dedicates herself in the pursuit of her purpose of inspiring her students and stakeholders to be in their fullest potential by cultivating minds, capturing hearts, and changing lives to become better individuals of the society <br><br>

Because LCC aims to – Change Lives for the Better YOU</p>

                    
                </div>
            </div>

            <!-- Contact Us Section (Right) -->
            
            <div class="col-lg-6 col-md-12">
                <div class="contact-right" style="border: 2px solid #000080; padding: 20px; border-radius: 8px;">
                    <h4 style="color: #000080">Contact Us</h4>
                    <ul>
                        <li><span>Land-line:</span><br>&nbsp;&nbsp;&nbsp;&gt; (044)762-36-60</li>
                        <li><span>Mobile Numbers:</span><br>&nbsp;&nbsp;&nbsp;&gt; 09277676921 - General Information</li>
                        <li>&nbsp;&nbsp;&nbsp;&gt; See the contact information for the LCC campus for your specific concerns with them.</li>
                    </ul>
            
                    <h4 style="color: #000080">Campuses</h4>
                    <ul>
                        <li><span>Kaypian Campus (Main):</span><br>
                        Address: Kaypian Road corner Quirino Highway (in front of Starmall Starbucks side), City of San Jose del Monte, Bulacan, Philippines, 3023 <br> 
                        Mobile Numbers:</span><br>&nbsp;&nbsp;&nbsp;&gt; 09615323351 – Registrar’s Office<br>&nbsp;&nbsp;&nbsp;&gt; 09610525397 – Accounting Office <br>
                        
                        <li><span>Kaypian Campus (3rd Campus):</span><br>
                        Address: Kaypian Road (in front of Starmall Car Park Building), City of San Jose del Monte, Bulacan, Philippines, 3023</li>
                        
                        <li><span>Francisco Homes Campus:</span><br>
                        Address: Block 6 Lot 3 to 5 Phase-F (Across Francisco Homes Elementary School), Francisco Homes I, Barangay Narra, San Jose del Monte City, Bulacan, Philippines, 3023</li>
                        
                        <li><span>Muzon Campus:</span><br>
                        Address: Tungko-Santa Maria Road (between Simplicity Supermarket and Bank of Pandi), Zone 2 Barangay Muzon, City, of San Jose del Monte Bulacan, Philippines, 3023 <br> 
                        Mobile Numbers:</span><br>&nbsp;&nbsp;&nbsp;&gt; 09219167004 – General Information<br>
                    </ul>
                </div>
                <div class="mt-5">
                    <h4>LCC Hymn</h4>
                    <p>Watch the LCC Hymn below:</p>

                    <!-- Embedded YouTube video -->
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/DbDJojRB6VA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <p><strong>Verse 1:</strong><br>
                    We lead, we compete, we excel<br>
                    We are proud LCCians, proud LCCians!<br>
                    Forward we march, we all yell<br>
                    We are proud LCCians, proud LCCians!<br>
                    Guided with a motherly care<br>
                    LCC mark we bear</p>

                    <p><strong>Chorus 1:</strong><br>
                    We praise you and salute you<br>
                    Forever we say, ‘Thank you.’<br>
                    For keeping your torch aflame<br>
                    While we stride heads up high<br>
                    taking pride in your name</p>

                    <p><strong>Chorus 2:</strong><br>
                    Dear LCC, Alma Mater<br>
                    You raise us to be better<br>
                    Your thrust is to serve us all<br>
                    Molding us to be bright so<br>
                    we’re here standing tall</p>

                    <p><strong>Bridge:</strong><br>
                    We uphold your core values<br>
                    All we learned will be of use</p>

                    <p><strong>Coda:</strong><br>
                    LCC brings out the best in you<br>
                    Changing lives for the better you.<br>
                    (repeat Coda 2x)</p>
                </div>
            </div>

        </div>
    </div>
    <br>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const toggleSwitch = document.getElementById('darkToggle');
        const themeLabel = document.querySelector('.form-check-label');

        // On switch toggle
        toggleSwitch.addEventListener('change', () => {
            document.body.classList.toggle('dark-mode', toggleSwitch.checked);
            localStorage.setItem('theme', toggleSwitch.checked ? 'dark' : 'light');
        });

        // Load saved theme on page load
        window.addEventListener('DOMContentLoaded', () => {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'dark') {
                document.body.classList.add('dark-mode');
                toggleSwitch.checked = true;
            }
        });
    </script>

</body>

</html>
