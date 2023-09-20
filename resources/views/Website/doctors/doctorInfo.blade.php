
    <style>
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        body{
            background-color: #0a7ffb;
        }
        .container {
            animation: fadeIn 1s ease-out;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .profile-card {
            animation: fadeIn 1s ease-out;
            position: relative;
            margin-top: 120px;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .profile-card h2 {
            animation: fadeIn 1.2s ease-out;
            margin-bottom: 10px;
            text-decoration: underline;
        }

        .profile-card p {
            animation: fadeIn 1.2s ease-out;
            margin-bottom: 8px;
        }

        .profile-card strong {
            font-weight: bold;
        }

        /* Style for links (assuming you have links in your layout) */
        a {
            animation: fadeIn 1.2s ease-out;
            color: #007bff;
            text-decoration: none;
        }

        .pfp{
            animation: fadeIn 1.2s ease-out;
            position: absolute;
            right: 1px;
            top: 0px;
            width: 220px;
            height: 197px;

        }

        .pfp img {
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>

    <title>
        Doctor Profile
    </title>

    <div class="container">
        @foreach ($doctorsList as $doctorList)
            <div class="profile-card">
                <h2><strong>Name:</strong> {{ $doctorList->name }}</h2>
                <p><strong>Section:</strong> {{ $doctorList->section->name }}</p>
                <div class="pfp">
                    @if($doctorList->image)
                        <img src="{{URL::asset('Dashboard/img/doctors/'.$doctorList->image->filename)}}"
                             alt="">
                    @else
                        <img src="{{URL::asset('Dashboard/img/doctor_default.png')}}"
                             alt="">
                    @endif
                </div>
                <p><strong>Phone:</strong> {{ $doctorList->phone }}</p>
                <p><strong>Email:</strong> {{ $doctorList->email }}</p>
            </div>
        @endforeach
    </div>

