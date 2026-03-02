<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LCC - About Us</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('auth/images/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('default/style.css') }}">
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
            width: 50%;
            height: auto;
            max-width: 50%;
        }

        .about-left h4,
        .contact-right h4 {
            font-weight: 700;
            margin-bottom: 10px;
        }

        .dark-mode {
            background-color: #121212 !important;
            color: white !important;
        }

        .dark-mode .text-muted {
            color: #ffffff !important;
        }

        .dark-mode .form-check-label {
            color: white !important;
        }

        .nav-link.active {
            color: #FEC653 !important;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img style="height: 60px" src="{{ asset('auth/images/logo.png') }}" alt="">
                LA CONCEPCION COLLEGE
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

    <div class="container">

        <h3 class="mt-5 p-5 text-center">📜 About Us</h3>

        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="darkToggle">
            <label class="form-check-label text-dark" for="darkToggle">Dark Mode</label>
        </div>

        {{-- HEADER IMAGE --}}
        <header class="text-center">
            @if ($about && $about->header_image)
                <img src="{{ asset('about_images/' . $about->header_image) }}" class="img-fluid">
            @else
                <img src="{{ asset('default/about.png') }}" class="img-fluid">
            @endif
        </header>

        {{-- ABOUT DESCRIPTION --}}
        @if ($about && $about->about_description)
            <p class="mt-4">
                {!! nl2br(e($about->about_description)) !!}
            </p>
        @endif

        <div class="row mt-4">

            {{-- LEFT SIDE --}}
            <div class="col-lg-6 col-md-12">
                <div class="about-left">

                    <h4>LCC History</h4>
                    @if ($about && $about->history)
                        {!! $about->history !!}
                    @endif

                    <h4>Vision and Mission</h4>
                    @if ($about && $about->vision_mission)
                        <p class="text-center">
                            {!! nl2br(e($about->vision_mission)) !!}
                        </p>
                    @endif

                </div>
            </div>

            {{-- RIGHT SIDE --}}
            <div class="col-lg-6 col-md-12">

                <div class="contact-right" style="border:2px solid #000080; padding:20px; border-radius:8px;">
                    <h4 style="color:#000080">Contact Us</h4>

                    @if ($about && $about->contact_info)
                        {!! $about->contact_info !!}
                    @endif

                    <h4 style="color:#000080">Campuses</h4>

                    @if ($about && $about->campuses)
                        {!! $about->campuses !!}
                    @endif
                </div>

                {{-- HYMN --}}
                @if ($about && $about->hymn_link)
                    <div class="mt-5">
                        <h4>LCC Hymn</h4>
                        <p>Watch the LCC Hymn below:</p>

                        <iframe width="100%" height="315" src="{{ $about->hymn_link }}" frameborder="0"
                            allowfullscreen>
                        </iframe>
                    </div>
                @endif

            </div>
        </div>
    </div>

    <br>

    <button id="chatToggleBtn" class="chat-btn">
        <img src="{{ asset('profile-28.svg') }}" alt="Chat" width="28" height="28">
    </button>

    <div id="chatModal" class="chat-modal">
        <div class="chat-header">
            <span>ASSISTbot</span>
        </div>
        <iframe src="https://page.botpenguin.com/68d4af53c61cda54b17f1577/68d4af070e1a130391d86ff8" frameborder="0">
        </iframe>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const toggleSwitch = document.getElementById('darkToggle');

        toggleSwitch.addEventListener('change', () => {
            document.body.classList.toggle('dark-mode', toggleSwitch.checked);
            localStorage.setItem('theme', toggleSwitch.checked ? 'dark' : 'light');
        });

        window.addEventListener('DOMContentLoaded', () => {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'dark') {
                document.body.classList.add('dark-mode');
                toggleSwitch.checked = true;
            }
        });
    </script>

    <script>
        const chatBtn = document.getElementById('chatToggleBtn');
        const chatModal = document.getElementById('chatModal');

        chatBtn.addEventListener('click', () => {
            if (chatModal.style.display === 'flex') {
                chatModal.style.display = 'none';
            } else {
                chatModal.style.display = 'flex';
            }
        });
    </script>

</body>

</html>
