<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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

    <title>Hasil Test</title>
</head>
<style>
    @font-face {
        font-family: 'kanit';
        src: url({{ asset('Kanit/Kanit-Regular.ttf') }})
    }

    body {
        font-family: 'kanit';
    }

    .card {
        border-radius: 2px;
    }

    p span {
        font-size: 20px;
    }

    .card h4 {
        padding: 20px;
        text-align: center;
        color: white;
        margin-top: 10px;
    }

    a {
        text-decoration: none;
    }

    .card {
        border-radius: 2px;
    }
</style>

<body>
    <div class="container mt-5">
        <div class="col-12 mx-auto">
            <div class="card shadow">
                {{-- <div class="card-header">
                    <h2>Hasil Test Anda</h2>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <p>Jawaban Benar : <span style="color: green;" id="rightAnswer">0</span></p>
                            <p>Jawaban Salah : <span style="color: red;" id="wrongAnswer">0</span></p>
                        </div>
                        <div class="chart">
                            <canvas id="answerChart" width="200" height="200"></canvas>
                        </div>
                    </div>
                </div>
                 --}}
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <h1>Terimakasih Telah Mengerjakan Tes di Halaman ini!</h1>
                    </div>
                    <div class="mt-5">
                        {{-- gif welt --}}
                        <div class="d-flex justify-content-center">
                            <div class="tenor-gif-embed" data-postid="2040169369417123107" data-share-method="host"
                                data-aspect-ratio="1" data-width="50%"><a
                                    href="https://tenor.com/view/welt-yang-welt-thank-you-thanks-hsr-gif-2040169369417123107">Welt
                                    Yang Thank You GIF</a>from <a href="https://tenor.com/search/welt+yang-gifs">Welt
                                    Yang
                                    GIFs</a></div>
                        </div>
                        <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
                        {{-- gif welt --}}
                    </div>
                    <div class="mt-5">
                        <div class="row d-flex justify-content-center">
                            <div class="col-3">
                                <a href="https://www.16personalities.com/id/tes-kepribadian" target="blank">
                                    <div class="card shadow bg-primary">
                                        <h4>Test Kepribadian</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="https://vark-learn.com/kuesioner-vark/" target="blank">
                                    <div class="card shadow bg-warning">
                                        <h4>Cek Gaya Belajar</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="https://webcamtoy.com/" target="blank">
                                    <div class="card shadow bg-success">
                                        <h4>Photo Booth</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/" class="btn btn-secondary" style="border-radius: 2px;">Kembali</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- <script>
        var ctx = document.getElementById('answerChart').getContext('2d');
        const spanRightAnswer = document.getElementById('rightAnswer');
        const spanWrongAnswer = document.getElementById('wrongAnswer');
        let rightAnswer = localStorage.getItem('rightAnswer');
        let wrongAnswer = localStorage.getItem('wrongAnswer');

        spanRightAnswer.textContent = rightAnswer;
        spanWrongAnswer.textContent = wrongAnswer;
        var answerChart = new Chart(ctx, {
            type: 'doughnut', 
            data: {
                datasets: [{
                    label: 'Answer',
                    data: [wrongAnswer, rightAnswer],
                    backgroundColor: ['red', 'green'],
                    borderWidth: 1 
                }]
            },
            options: {
                // Chart options
            }
        });
    </script> --}}
</body>

</html>
