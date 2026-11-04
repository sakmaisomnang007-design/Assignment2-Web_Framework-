@props([
    'campus' => 'Life University',
    'classroom' => 'B04',
])

@extends('layouts.app')

@section('content')
    <div class="profile-page">

        <div class="profile-card">

            <!-- Header -->
            <div class="profile-header">
                <span class="campus-label">STUDENT PROFILE</span>

                <div class="avatar">
                    {{ strtoupper(substr($first_name, 0, 1)) }}
                </div>
            </div>

            <!-- Profile Content -->
            <div class="profile-content">

                <div class="campus-name">
                    {{ $campus }}
                </div>

                <h1>{{ $first_name }} {{ $last_name }}</h1>

                <p class="full-name">{{ $full_name }}</p>

                <div class="classroom">
                    <span>Classroom</span>
                    <strong>{{ $classroom }}</strong>
                </div>

                <div class="divider"></div>

                <!-- Academic Information -->
                <div class="section-title">
                    Academic Information
                </div>

                <div class="info-list">

                    <div class="info-item">
                        <div class="info-icon">01</div>
                        <div>
                            <span>Major</span>
                            <h3>{{ $major }}</h3>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">02</div>
                        <div>
                            <span>Subject</span>
                            <h3>{{ $subject }}</h3>
                        </div>
                    </div>

                </div>

                <!-- Buttons -->
                <div class="profile-actions">

                    <button onclick="showMessage()">
                        Contact Me <span>↗</span>
                    </button>

                    <button class="download-btn" onclick="downloadProfile()">
                        Download Profile ↓
                    </button>

                </div>

            </div>

            <div class="profile-footer">
                <span>{{ $campus }}</span>
                <span>STUDENT CARD</span>
            </div>

        </div>

    </div>

    <style>
        * {
            box-sizing: border-box;
        }

        .profile-page {
            min-height: 85vh;
            padding: 60px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f8fafc;
            font-family: Arial, sans-serif;
            color: #18181b;
        }

        .profile-card {
            width: 100%;
            max-width: 520px;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            overflow: hidden;
        }

        /* Header */

        .profile-header {
            height: 130px;
            background: #f1f5f9;
            padding: 25px 30px;
            position: relative;
        }

        .campus-label {
            font-size: 11px;
            letter-spacing: 2px;
            font-weight: 600;
            color: #64748b;
        }

        .avatar {
            position: absolute;
            bottom: -38px;
            left: 30px;
            width: 76px;
            height: 76px;
            border-radius: 50%;
            background: #18181b;
            color: white;
            border: 5px solid white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            font-weight: 600;
        }

        /* Content */

        .profile-content {
            padding: 55px 30px 30px;
        }

        .campus-name {
            font-size: 13px;
            color: #64748b;
            margin-bottom: 10px;
        }

        .profile-content h1 {
            font-size: 28px;
            font-weight: 600;
            letter-spacing: -1px;
            margin: 0;
            color: #18181b;
        }

        .full-name {
            color: #94a3b8;
            font-size: 14px;
            margin-top: 8px;
        }

        .classroom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 25px;
            font-size: 14px;
        }

        .classroom span {
            color: #64748b;
        }

        .classroom strong {
            background: #f1f5f9;
            padding: 7px 14px;
            border-radius: 6px;
            font-size: 13px;
        }

        /* Divider */

        .divider {
            height: 1px;
            background: #e5e7eb;
            margin: 28px 0;
        }

        .section-title {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        /* Academic Information */

        .info-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .info-icon {
            width: 38px;
            height: 38px;
            border-radius: 8px;
            background: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 600;
            color: #475569;
        }

        .info-item span {
            color: #94a3b8;
            font-size: 12px;
        }

        .info-item h3 {
            margin: 5px 0 0;
            font-size: 15px;
            font-weight: 500;
        }

        /* Actions */

        .profile-actions {
            display: flex;
            gap: 10px;
            margin-top: 35px;
        }

        .profile-actions button {
            flex: 1;
            padding: 13px 12px;
            border: 1px solid #18181b;
            border-radius: 7px;
            background: #18181b;
            color: white;
            font-size: 13px;
            cursor: pointer;
            transition: 0.2s;
        }

        .profile-actions button:hover {
            background: #3f3f46;
        }

        .profile-actions button span {
            margin-left: 5px;
        }

        .profile-actions .download-btn {
            background: white;
            color: #18181b;
            border-color: #e5e7eb;
        }

        .profile-actions .download-btn:hover {
            background: #f8fafc;
        }

        /* Footer */

        .profile-footer {
            border-top: 1px solid #e5e7eb;
            padding: 17px 30px;
            display: flex;
            justify-content: space-between;
            color: #94a3b8;
            font-size: 10px;
            letter-spacing: 1px;
        }

        /* Responsive */

        @media (max-width: 500px) {

            .profile-page {
                padding: 25px 12px;
            }

            .profile-content {
                padding: 55px 20px 25px;
            }

            .profile-content h1 {
                font-size: 24px;
            }

            .profile-actions {
                flex-direction: column;
            }

            .profile-footer {
                padding: 15px 20px;
            }

        }
    </style>

    <script>
        function showMessage() {
            alert("Thank you for visiting my profile!");
        }

        function downloadProfile() {

            const profile = [
                "STUDENT PROFILE",
                "-------------------------",
                "Campus: " + @json($campus),
                "First Name: " + @json($first_name),
                "Last Name: " + @json($last_name),
                "Full Name: " + @json($full_name),
                "Classroom: " + @json($classroom),
                "Major: " + @json($major),
                "Subject: " + @json($subject)
            ].join("\n");

            const blob = new Blob([profile], {
                type: "text/plain;charset=utf-8"
            });

            const url = URL.createObjectURL(blob);

            const link = document.createElement("a");
            link.href = url;
            link.download = "student-profile.txt";

            document.body.appendChild(link);
            link.click();
            link.remove();

            URL.revokeObjectURL(url);
        }
    </script>
@endsection
