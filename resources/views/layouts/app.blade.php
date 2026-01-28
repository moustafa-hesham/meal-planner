<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Recipes')</title>

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        body {
            background: #f6f7fb;
        }

        .recipe-card {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid rgba(0, 0, 0, .08);
            transition: .15s;
        }

        .recipe-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, .08);
        }

        .recipe-img {
            position: relative;
            height: 140px;
        }

        .recipe-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .badge-pill {
            position: absolute;
            top: 10px;
            left: 10px;
            border-radius: 999px;
            font-size: 12px;
            padding: 4px 10px;
            font-weight: 600;
        }

        .badge-dinner {
            background: #d1fae5;
            color: #065f46;
        }

        .badge-lunch {
            background: #ffedd5;
            color: #7c2d12;
        }

        .badge-breakfast {
            background: #ecfccb;
            color: #3f6212;
        }

        .icon-btn {
            position: absolute;
            right: 10px;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: white;
            border: 1px solid rgba(0, 0, 0, .1);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-heart {
            top: 10px;
        }

        .icon-menu {
            bottom: 10px;
        }

        .recipe-card {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid rgba(0, 0, 0, .08);
        }

        .recipe-media {
            position: relative;
            height: 140px;
            background: #e5e7eb;
        }

        .recipe-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .recipe-pill {
            position: absolute;
            top: 10px;
            left: 10px;
            background: #d1fae5;
            /* green soft */
            color: #065f46;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
            padding: 4px 10px;
            border: 1px solid rgba(255, 255, 255, .7);
        }

        .recipe-fav {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 34px;
            height: 34px;
            border-radius: 999px;
            background: rgba(255, 255, 255, .92);
            border: 1px solid rgba(0, 0, 0, .10);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .recipe-title {
            font-weight: 800;
            font-size: 0.95rem;
            line-height: 1.2;
            margin: 0;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            min-height: 2.4em;
        }
    </style>
</head>

<body>
    @yield('content')
</body>

</html>