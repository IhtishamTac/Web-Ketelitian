<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <title>Halaman Utama</title>
</head>
<style>
    @font-face {
        font-family: 'kanitbold';
        src: url({{ asset('Kanit/Kanit-Bold.ttf') }});
    }

    @font-face {
        font-family: 'kanit';
        src: url({{ asset('Kanit/Kanit-Regular.ttf') }})
    }

    body {
        font-family: 'kanit';
        /* background-image: linear-gradient(to right, blue, black); */
    }

    .card h4 {
        padding: 70px;
        text-align: center;
        color: white;
    }

    a {
        text-decoration: none;
    }

    .card {
        border-radius: 2px;
    }
    .audio{

    }
</style>

<body>
    @include('nav')
    <div class="container mt-5">
        <p><span style="color: rgb(59, 105, 255); cursor: pointer;">Click anywhere </span>to Play some Music!</p>
        
        <div class="mt-5">
            <div class="row">
                <div class="">
                    <a href="cek-ketelitian">
                        <div class="card shadow bg-danger">
                            <h4 class="ketelitian">Cek Ketelitian</h4>
                        </div>
                    </a>
                </div>

                <div class="col-4">
                    <div class="mt-3">
                        <a href="https://webcamtoy.com/" target="blank">
                            <div class="card shadow bg-success">
                                <h4>Photo Booth</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mt-3">
                        <a href="https://vark-learn.com/kuesioner-vark/" target="blank">
                            <div class="card shadow bg-warning">
                                <h4 class="text-dark">Cek Gaya Belajar</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mt-3">
                        <a href="https://www.16personalities.com/id/tes-kepribadian" target="blank">
                            <div class="card shadow bg-primary">
                                <h4>Test Kepribadian</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script>
        localStorage.removeItem('rightAnswer');
        localStorage.removeItem('wrongAnswer');
        document.addEventListener('DOMContentLoaded', () => {

            const audioElement = new Audio('asset/audio/c418wethand.mp3');

            audioElement.loop = true;

            document.addEventListener('click', () => {
                audioElement.play().catch(error => {
                    console.error('Error playing audio:', error);
                });
            });
        });
    </script>
</body>

</html>
