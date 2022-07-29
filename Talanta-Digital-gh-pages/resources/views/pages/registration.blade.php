@extends('layouts.app')
@section('content')
    <script>
        window.addEventListener('load', () => {
            axios.post('/auth/check').then((response) => {
                console.log(response.data);
                if (response.data == 2) {
                    document.getElementById('login-message').classList.remove('d-none');
                    document.getElementById('login-message').classList.add('d-flex');
                    document.getElementById('login-button-button').click();
                } else {
                    window.location = '/home';
                }
            }).catch((error) => {
                console.log(error);
            });
        });
    </script>
@endsection
