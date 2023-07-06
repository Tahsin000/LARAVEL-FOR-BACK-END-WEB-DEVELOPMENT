@extends('layout.custom')

@section('content')

<div class="h-screen flex justify-center flex-col gap-3 items-center bg-[#76df4d]">
    <p class=" uppercase font-normal text-7xl">
        hotash naki ?
    </p>
    <p class="text-3xl"> Hi, I am Tahsin Abrar</p>
    <style>
        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: gray;
            color: #000;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    <form action="form-submit" method="post" class="bg-gray-900 px-4 py-6 rounded-lg">
        @csrf
        <div class="mb-6">
            <label for="username" class="block mb-1">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" class="w-full px-3 py-2 rounded-md " required>
        </div>
        <div class="mb-6">
            <label for="password" class="text-black block mb-1">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" class="w-full px-3 py-2 rounded-md " required>
        </div>
        <div class="mb-6 black">
            <input type="submit" class="px-4 py-2 rounded-md">

        </div>
    </form>



    <div class="divide-x bg-red-600"></div>

</div>
@endsection