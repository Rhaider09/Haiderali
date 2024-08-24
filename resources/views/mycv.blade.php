<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Haider Ali | My CV</title>

    {{-- font awesome icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Sora:wght@300&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            font-family: "Montserrat", sans-serif;
        }

        :root {
            --custom-color-1: #2E2E2E;
            --custom-text-color: #2E2E2E;
            --custom-icon-color: #FF3F5E;
        }

        body {
            font-size: 1.6vw;
            color: var(--custom-text-color);
        }

        .bold {
            font-weight: 700;
            font-size: 2vw;
            text-transform: uppercase;
        }

        .org_names {
            font-size: 1.6vw;
            font-weight: bold;
        }

        .title {
            margin-bottom: 2vw;
        }

        .resume_left .bold {
            color: white;
        }

        .resume_item {
            padding: 2.5vw 0;
            border-bottom: 0.2vw solid var(--custom-color-1);
        }

        .resume_left .resume_item:last-child,
        .resume_right .resume_item:last-child {
            border-bottom: 0;
        }

        .resume_left ul li:last-child {
            margin-bottom: 0;
        }

        .resume_left ul li .icon {
            width: 4.2vw;
            height: 4.2vw;
            background: var(--custom-icon-color);
            color: white;
            border-radius: 50%;
            margin-right: 1.5vw;
            font-size: 2.7vw;
            position: relative;
        }

        .resume_left .icon i {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .resume_left ul li .data {
            font-size: 1.4vw;
            color: white;
            margin: 0.7vw 0;
        }

        .resume_left .resume_social .semi-bold {
            color: white;
            margin-bottom: 0.8vw;
            font-weight: 500;
            font-size: 1.5vw;
        }

        .social_links:hover{
            color: var(--custom-icon-color);
        }

        .resume_right {
            width: 100%;
            background: white;
            padding: 2.5vw;
        }

        .resume_right .bold {
            color: var(--custom-color-1);
        }

        .resume_right .resume_work ul,
        .resume_right .resume_education ul,
        .resume_right .resume_projects ul {
            padding-left: 4vw;
            overflow: hidden;
        }

        .resume_right ul li {
            position: relative;
        }

        .resume_right ul li .date {
            font-size: 1.4vw;
            font-weight: 400;
            margin-bottom: 0.2vw;
        }

        .resume_right ul li .info {
            margin-bottom: 2vw;
        }

        .resume_right .resume_work ul li:before,
        .resume_right .resume_education ul li:before,
        .resume_right .resume_projects ul li:before {
            content: "";
            position: absolute;
            top: 0.5vw;
            left: -2.5vw;
            width: 0.9vw;
            height: 0.9vw;
            border-radius: 50%;
            border: 0.2vw solid var(--custom-color-1);
        }

        .resume_right .resume_work ul li:after,
        .resume_right .resume_education ul li:after,
        .resume_right .resume_projects ul li:after {
            content: "";
            position: absolute;
            top: 1.6vw;
            left: -2.2vw;
            width: 0.2vw;
            bottom: 0;
            background: var(--custom-color-1);
        }

        .onprintdiv{
            width: 30%;
        }

        .onprintshow{
            display: none;
            color: white;
            margin-bottom: 2vw;
            font-size: 1vw;
        }

        @media print {
            #printButton {
                /* Hide the print button when printing */
                display: none;
            }
            .onprintshow{
                display: block;
            }
            .social_links{
                display: none;
            }
        }
    </style>
</head>

<body>
    <div id="cvContent" class="w-full h-auto flex">
        <div style="background: var(--custom-color-1);" class="resume_left w-1/2">

            <div style="margin: 2.4vw 0;" class="w-[30vw] flex justify-center">
                <img class="h-full rounded-full w-5/6" src="{{ asset('img/' . $cv->image) }}" alt="Error">
            </div>

            <div style="text-align: center; margin-top:2vw;" class="title">
                <p class="bold">{{ $cv->name }}</p>
                <p style="font-size: 1.4vw; color: white;">{{ $cv->title }}</p>
            </div>

            <div style="padding: 0 4vw; margin: 1vw 0;">
                <div class="resume_item">
                    <ul>
                        <li style="margin-bottom: 1.5vw;" class="flex items-center">
                            <div class="icon">
                                <i class="fa-brands fa-square-whatsapp"></i>
                            </div>
                            <div class="data">{{ $cv->phone_no }}</div>
                        </li>
                        <li style="margin-bottom: 1.5vw;" class="flex items-center">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="data">{{ $cv->email }}</div>
                        </li>
                        <li style="margin-bottom: 1.5vw;" class="flex items-center">
                            <div class="icon">
                                <i class="fab fa-weebly"></i>
                            </div>
                            <div class="data">{{ $cv->website }}</div>
                        </li>
                    </ul>
                </div>
                <div class="resume_item resume_skills">
                    <div class="title">
                        <p class="bold">skill's</p>
                    </div>
                    <ul>
                        @foreach ($skills as $skill)
                            <li class="text-white mb-2">
                                <div style="margin-bottom: -1.5vw; font-size: 1.3vw;" class="skill_name">
                                    {{ $skill->skill_name }}</div>
                                <br>
                                <div class="flex items-center">
                                    <div style="margin: 0 1vw; height: 1vw; border: 0.1vw solid white;" class="relative w-3/5">
                                        <span class="absolute left-0 top-0 h-full w-[90%] bg-white"></span>
                                    </div>
                                    <div style="font-size: 1.4vw;">90%</div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="resume_item resume_social">
                    <div class="title">
                        <p class="bold">Social</p>
                    </div>
                    <ul>
                        <li style="margin-bottom: 1.5vw;" class="flex items-center">
                            <div class="icon">
                                <i class="fab fa-linkedin"></i>
                            </div>
                            <div class="data">
                                <p class="semi-bold">Linkedin</p>
                                <a class="social_links" href="https://www.linkedin.com/in/haider-ali-amjad-a89438236/">Haider Ali amjad</a>
                            </div>
                        </li>

                        <div class="onprintdiv">
                            <p class="onprintshow">https://www.linkedin.com/in/haider-ali-amjad-a89438236/</p>
                        </div>

                        <li style="margin-bottom: 1.5vw;" class="flex items-center">
                            <div class="icon">
                                <i class="fa-brands fa-stack-overflow"></i>
                            </div>
                            <div class="data">
                                <p class="semi-bold">S. Overflow</p>
                                <a class="social_links" href="https://stackoverflow.com/users/23036570/haider-ali">Haider Ali Amjad</a>
                            </div>
                        </li>

                        <div class="onprintdiv">
                            <p class="onprintshow">https://stackoverflow.com/users/23036570/haider-ali</p>
                        </div>

                        <li style="margin-bottom: 1.5vw;" class="flex items-center">
                            <div class="icon">
                                <i class="fa-brands fa-github"></i>
                            </div>
                            <div class="data">
                                <p class="semi-bold">Github</p>
                                <a class="social_links" href="https://github.com/Rhaider09">Haider Ali</a>
                            </div>
                        </li>

                        <div class="onprintdiv">
                            <p class="onprintshow">https://github.com/Rhaider09</p>
                        </div>

                        <li style="margin-bottom: 1.5vw;" class="flex items-center">
                            <div class="icon">
                                <i class="fa-brands fa-upwork"></i>
                            </div>
                            <div class="data">
                                <p class="semi-bold">Upwork</p>
                                <a class="social_links" href="https://www.upwork.com/freelancers/~0154f6a664c6088549?mp_source=sharen">Haider Ali R.</a>
                            </div>
                        </li>

                        <div class="onprintdiv">
                            <p class="onprintshow">https://www.upwork.com/freelancers/~0154f6a664c6088549?mp_source=share</p>
                        </div>

                        <li style="margin-bottom: 1.5vw;" class="flex items-center">
                            <div class="icon">
                                <img width="100" height="100" src="https://img.icons8.com/ios/50/fiverr--v2.png" alt="fiverr--v2" style="filter: brightness(0) invert(1);"/>


                                {{-- <i class="fa-brands fa-upwork"></i> --}}
                            </div>
                            <div class="data">
                                <p class="semi-bold">Fiverr</p>
                                <a class="social_links" href="https://www.fiverr.com/s/990krae">Haider Ali</a>
                            </div>
                        </li>

                        <div class="onprintdiv">
                            <p class="onprintshow">https://www.fiverr.com/s/990krae</p>
                        </div>

                    </ul>
                </div>
            </div>
        </div>

        <div class="resume_right">
            <div class="resume_item resume_about">
                <div class="title">
                    <p class="bold">About Me</p>
                </div>
                <p>{{ $cv->description }}</p>
            </div>

            <div class="resume_item resume_education">
                <div class="title">
                    <p class="bold">Education</p>
                </div>
                <ul>
                    <li>
                        <div class="date">{{ $cv->uni_year }}</div>
                        <div class="info">
                            <div>
                                <p class="org_names">{{ $cv->uni_name }}</p>
                                <p style="margin-top:-0.5vw;">{{ $cv->uni_degree }}</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="resume_item resume_work">
                <div class="title">
                    <p class="bold">Work Experience</p>
                </div>
                <ul>
                    @foreach ($experience as $exp)
                        <li class="mb-4">
                            <div class="flex">
                                <div class="date">{{ $exp->time_stayed }}</div>
                                <div class="date mx-2">{{ $exp->time_given }}</div>
                            </div>
                            <div class="info pt-3">
                                <p style="margin-top:-0.5vw; font-size: 1.4vw;">{{ $exp->position }}</p>
                                <div class="flex">
                                    <p class="org_names">{{ $exp->company_name }}</p>
                                    <p class="mx-2">{{ $exp->address }}</p>
                                </div>
                                <h6 class="mt-2">{{ $exp->code_languages }}</h6>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="resume_item resume_projects">
                <div class="title">
                    <p class="bold">Projects</p>
                </div>
                <ul>
                    @foreach ($projects as $project)
                        <li>
                            <div class="info">
                                <p class="org_names">{{ $project->title }}</p>
                                <p style="margin-top:-0.1vw; font-size: 1.4vw; font-weight: 500;">{{ $project->language }}</p>
                                <p class="mb-2" style="margin-top:-0.1vw; font-size: 1.2vw;">{{ $project->tags }}</p>
                                <p>{{ $project->description }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!-- Button to trigger print functionality -->
    <button id="printButton" class="fixed right-7 bottom-5 bg-[var(--custom-color-1)] hover:bg-[#1b1b1b] text-white font-bold py-2 px-4 rounded mt-4">Print CV</button>

    {{-- scripts --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        $(document).ready(function() {
            $('#printButton').on('click', function() {
                // Open print dialog
                window.print();
            });
        });
    </script>
</body>

</html>
