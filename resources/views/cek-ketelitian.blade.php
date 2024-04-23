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

    <title>Cek Ketelitian</title>
</head>
<style>
    @font-face {
        font-family: 'kanit';
        src: url({{ asset('Kanit/Kanit-Regular.ttf') }})
    }

    body {
        font-family: 'kanit';
        /* background-image: linear-gradient(to right, red, yellow); */
    }

    .jawab label {
        width: 100%;
    }

    .boldTimer {
        font-weight: bold;

    }

    .modal,
    .modal-dialog,
    .modal-content {
        transition-duration: 0.1s;
    }

    
</style>

<body>
    {{-- <button class="btn btn-success" data-bs-target="#modalRightAnswer" data-bs-toggle="modal" id="modalBenar"
        hidden>Modal</button>
    <button class="btn btn-danger" data-bs-target="#modalWrongAnswer" data-bs-toggle="modal" id="modalSalah"
        hidden>Modal</button> --}}
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Tes Ketelitian</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex justify-content-between">
                <div class="collapse navbar-collapse" id="navbarNav">
                    {{-- <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul> --}}
                </div>
            </div>
            <p class="p-3 text-danger" style="margin-top: 15px;" id="timer"> <span id="hour">00</span> : <span
                    id="minutes">00</span> : <span id="second">00</span> </p>
        </div>
    </nav>
    {{-- navbar         --}}


    <a href="/hasil-test" hidden id="btnHome"></a>
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <div class="mt-3">
                {{-- src gambar --}}
                <img id="gambar" src="
                
                " alt="gambar" style="width: 600px; ">
            </div>
            <div class="p-5"
                style="background-color: rgb(246, 246, 246); margin-top: 15px; width: 100%; max-height: 400px;">
                {{-- teks pertanyaan --}}
                <h3 id="pertanyaan">Ada berapa jerapah didalam gambar??</h3>
                <div class="jawaban mt-5">
                    <div class="jawab">
                        <label for="jawaban1" style="border: 1px solid green; border-radius: 5px;"
                            class="btn-outline-success p-3">
                            <input type="radio" name="jawaban" id="jawaban1" value="0-5" hidden> 0-5
                        </label>
                    </div>
                    <div class="jawab">
                        <label for="jawaban2" style="border: 1px solid yellow; border-radius: 5px;"
                            class="btn-outline-warning p-3">
                            <input type="radio" name="jawaban" id="jawaban2" value="6-10" hidden> 6-10
                        </label>
                    </div>
                    <div class="jawab">
                        <label for="jawaban3" style="border: 1px solid red; border-radius: 5px;"
                            class="btn-outline-danger p-3">
                            <input type="radio" name="jawaban" id="jawaban3" value="> 10" hidden> > 10
                        </label>
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2" style="margin-top: 200px;">
                    <button class="btn btn-secondary" style="border-radius: 2px;" id="btnBack" hidden>Kembali</button>
                    <button class="btn btn-primary" style="border-radius: 2px;" id="btnNext">Selanjutnya</button>
                    <button class="btn btn-danger" style="border-radius: 2px; display: none;" id="btnResult">
                        Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>


    {{-- modal bootstrap --}}
    <div class="modal fade" id="modalRightAnswer">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body border-white bg-success">
                    <div class="tenor-gif-embed" data-postid="24560368" data-share-method="host" data-aspect-ratio="1"
                        data-width="100%"><a
                            href="https://tenor.com/view/betul-sekali-lilis-darawangi-3d-entertainment-benar-sekali-tepat-sekali-gif-24560368">Betul
                            Sekali Lilis Darawangi GIF</a>from <a
                            href="https://tenor.com/search/betul+sekali-gifs">Betul Sekali GIFs</a></div>
                    <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalWrongAnswer">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body border-white bg-danger">
                    {{-- <h1 class="p-5 text-white text-center">Jawaban Anda Salah!</h1> --}}
                    <div class="tenor-gif-embed" data-postid="24505883" data-share-method="host" data-aspect-ratio="1"
                        data-width="100%"><a
                            href="https://tenor.com/view/fokus-danang-giri-sadewa-konsentrasi-perhatikan-baik-baik-starhits-gif-24505883">Fokus
                            Danang Giri Sadewa GIF</a>from <a href="https://tenor.com/search/fokus-gifs">Fokus GIFs</a>
                    </div>
                    <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalNotRightAnswer">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body border-white bg-secondary">
                    <h1 class="p-5 text-white text-center">Jawaban Anda kurang tepat!</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="jumpscare" style="position: absolute; width: 100%; top: 0; display: none;" id="jumpscare">
        {{-- <h1 class="p-5 text-white text-center">"INI JUMPSCARE"</h1> --}}
        <a href="/gif/five-nights-at-freddys-4-all-jumpscares-fnaf-4-2MhCN6"
            title="Five Nights at Freddy's 4 All Jumpscares (FNAF 4)"><img
                src="https://i.makeagif.com/media/8-23-2015/2MhCN6.gif"
                alt="Five Nights at Freddy's 4 All Jumpscares (FNAF 4)" style="width: 100%;"></a>
        <div style="font-size:50px;">
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script>
        const imageList = [
            'https://cdn1-production-images-kly.akamaized.net/NdiQXt61uvh07FQrdjDDzdnFE9s=/1200x675/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2878029/original/036542400_1565354643-tebak_gambar_hewan.jpg',
            'https://asset-2.tstatic.net/tribunnews/foto/bank/images/pohon_wajah_20160104_080042.jpg',
            'https://asset-2.tstatic.net/palu/foto/bank/images/gambar-binatang-yang-pertama-kali-anda.jpg',
        ];
        const textList = [
            'Ada berapa Binatang didalam gambar?',
            'Ada berapa Wajah didalam gambar?',
            'Ada berapa Binatang Bersayap didalam gambar?',
        ];
        const answerList = [
            '11',
            '13',
            '10',
        ];

        const answerQuestion1 = [
            '11',
            '12',
            '10',
        ];
        const answerQuestion2 = [
            '11',
            '10',
            '13'
        ];
        const answerQuestion3 = [
            '11',
            '8',
            '10'
        ];

        const answerIndex = [
            answerQuestion1,
            answerQuestion2,
            answerQuestion3
        ];

        const gambar = document.getElementById('gambar');
        const pertanyaan = document.getElementById('pertanyaan');
        const jawaban = [1, 2, 3].map(e => document.getElementById('jawaban' + e));
        const btnBack = document.getElementById('btnBack');
        const btnNext = document.getElementById('btnNext');
        const btnResult = document.getElementById('btnResult');
        const btnHome = document.getElementById('btnHome');
        //timer
        const timer = document.getElementById('timer');
        const timerSecond = document.getElementById('second');
        const timerMinutes = document.getElementById('minutes');
        const timerHour = document.getElementById('hour');
        var index = 0;

        var rightAnswer = 0;
        var wrongAnswer = 0;

        //set minutes here, at counter
        let counter = 20000;
        let randomNum = Math.floor(Math.random() * 9) + 1;

        const modalJumpscare = document.getElementById('jumpscare');
        const jumpscareAudio = new Audio();
        jumpscareAudio.src = 'asset/audio/fnaf-jumpscare-sound.mp3';

        const tickSound = new Audio();
        tickSound.src = 'asset/audio/a-kitchen-timer-55420.mp3';

        function updateTimer() {
            if (counter == 0) {
                tickSound.pause();
                btnHome.click();
                return alert('Waktu habis!');
            };
            if (counter == 10) {
                // timer.style.font-weight = 'bold';
                timer.classList.add('boldTimer');
                tickSound.play();
            }
            if (randomNum === counter) {
                modalJumpscare.style.display = 'block';
                jumpscareAudio.play();
            }
            setTimeout(() => {
                modalJumpscare.style.display = 'none';
                jumpscareAudio.pause();
                jumpscareAudio.currentTime = 1;
            }, 2000);


            const hours = Math.floor(counter / 3600);
            const minutes = Math.floor((counter % 3600) / 60);
            const seconds = counter % 60;

            console.log(randomNum);
            counter--;
            timerSecond.textContent = seconds.toString().padStart(2, '0');
            timerMinutes.textContent = minutes.toString().padStart(2, '0');
            timerHour.textContent = hours.toString().padStart(2, '0');

            setTimeout(updateTimer, 1000);
        }

        function updateContent() {
            gambar.src = imageList[index];
            pertanyaan.textContent = textList[index];
            //mengubah value radio button
            jawaban.forEach((button, i) => {
                button.value = answerIndex[index][i];
                // Update teks label
                const label = button.parentElement;
                label.textContent = answerIndex[index][i];

                label.prepend(button);

            });
            jawaban.forEach(button => {
                button.checked = false;
            });
        }

        updateContent();
        updateTimer();

        btnNext.addEventListener('click', () => {
            let selectedJawaban = null;
            jawaban.forEach(button => {
                if (button.checked) {
                    selectedJawaban = button.value;
                }
            });
            if (!selectedJawaban) {
                alert('Mohon pilih jawaban anda!');
                return;
            }
            console.log(selectedJawaban);
            const modalBenar = new bootstrap.Modal(document.getElementById('modalRightAnswer'));
            const modalSalah = new bootstrap.Modal(document.getElementById('modalWrongAnswer'));
            if (selectedJawaban == answerList[index]) {
                console.log('right answer');
                modalBenar.show();
                rightAnswer++;
            } else {
                console.log('wrong answer');
                modalSalah.show();
                wrongAnswer++;
            }
            setTimeout(() => {
                modalBenar.hide();
                modalSalah.hide();
            }, 1000);
            index++;
            if (index >= imageList.length) {
                index = imageList.length - 1;
            }
            console.log(rightAnswer, wrongAnswer);
            updateContent();
            if (index == imageList.length - 1) {
                btnResult.style.display = 'block';
                btnNext.style.display = 'none';
            }
        });

        btnBack.addEventListener('click', () => {
            index--;
            if (index < 0) {
                index = 0;
            }
            updateContent();
        });

        btnResult.addEventListener('click', (() => {
            let selectedJawaban = null;
            jawaban.forEach(button => {
                if (button.checked) {
                    selectedJawaban = button.value;
                }
            });
            if (!selectedJawaban) {
                alert('Mohon pilih jawaban anda!');
                return;
            }
            const modalBenar = new bootstrap.Modal(document.getElementById('modalRightAnswer'));
            const modalSalah = new bootstrap.Modal(document.getElementById('modalWrongAnswer'));
            if (selectedJawaban == answerList[index]) {
                console.log('right answer');
                modalBenar.show();
                rightAnswer++;
            } else {
                console.log('wrong answer');
                modalSalah.show();
                wrongAnswer++;
            }
            setTimeout(() => {
                modalBenar.hide();
                modalSalah.hide();
            }, 2000);
            index++;
            if (index >= imageList.length) {
                index = imageList.length - 1;
            }
            console.log(rightAnswer, wrongAnswer);
            updateContent();
            localStorage.setItem('rightAnswer', rightAnswer);
            localStorage.setItem('wrongAnswer', wrongAnswer);
            btnHome.click();
        }));

       
    </script>
</body>

</html>
