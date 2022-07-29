const { default: axios } = require('axios');

require('./bootstrap');


window.onload = () => {
    console.log('Talanta loaded completely.');
};
let loginbutton = document.getElementById('login-button');
let registerbutton = document.getElementById('register-button');
let registrationbutton = document.getElementById('registration-button');
let showinfo = document.getElementById('show-info');
let profileupdatebutton = document.getElementById('profile-update');
let courseregister = document.getElementById('course-register');
let courseRegisterButton = document.getElementById('course-register-button');

registrationbutton.addEventListener('click', (event) => {
    event.preventDefault();
    document.getElementById('registration-button-button').click();
});

loginbutton.addEventListener('click', (event) => {
    event.preventDefault();
    loginbutton.innerHTML = 'Logging in...';

    axios.post('/login', {
        email: document.querySelector('input[name=login_email]').value,
        password: document.querySelector('input[name=login_password]').value,
    }).then((response) => {
        if (response.data == '') {
            window.location = window.location.href;
        }
    }).catch((error) => {
        loginbutton.innerHTML = 'Login';
        if (error.response.data.errors.email) {
            document.getElementById('email_err').classList.remove('d-none');
            document.getElementById('email_err').innerHTML = error.response.data.errors.email;
        } else {
            document.getElementById('name_err').classList.add('d-none');
        }
        if (error.response.data.errors.password) {
            document.getElementById('password_err').classList.remove('d-none');
            document.getElementById('email_err').innerHTML = error.response.data.errors.password;
        } else {
            document.getElementById('password_err').classList.add('d-none');
        }
    });
});

registerbutton.addEventListener('click', (event) => {
    event.preventDefault();
    registerbutton.innerHTML = 'Registering...';
    axios.post('register', {
        email: document.querySelector('input[name=email]').value,
        name: document.querySelector('input[name=name]').value,
        password: document.querySelector('input[name=password]').value,
        password_confirmation: document.querySelector('input[name=password_confirmation]').value,
    }).then((response) => {
        if (response.data == '') {
            window.location = window.location.href;
        }
    }).catch((error) => {
        registerbutton.innerHTML = 'Register';
        if (error.response.data.errors.email) {
            document.getElementById('register_email_err').innerHTML = error.response.data.errors.email;
            document.getElementById('register_email_err').classList.remove('d-none');
        } else {
            document.getElementById('register_email_err').classList.add('d-none');
        }
        if (error.response.data.errors.name) {
            document.getElementById('register_name_err').innerHTML = error.response.data.errors.name;
            document.getElementById('register_name_err').classList.remove('d-none');
        } else {
            document.getElementById('register_name_err').classList.add('d-none');
        }
        if (error.response.data.errors.password) {
            document.getElementById('register_password_err').innerHTML = error.response.data.errors.password;
            document.getElementById('register_password_err').classList.remove('d-none');
        } else {
            document.getElementById('register_password_err').classList.add('d-none');
        }
    });
});

profileupdatebutton.addEventListener('click', () => {
    showinfo.innerHTML = 'loading...';

    axios.get('/profile/update').then((response) => {
        showinfo.innerHTML = response.data;
        axios.post('/status/check').then((res) => {
            if (res.data.profile_status == 'updated') {
                document.querySelector('input[name=phone_number]').value = res.data.phone_number;
                document.querySelector('input[name=year_of_birth]').value = res.data.year_of_birth;
                document.querySelector('input[name=highest_level_of_education]').value = res.data.highest_level_of_education;
                document.querySelector('input[name=county]').value = res.data.county;
                document.querySelector('input[name=sub_county]').value = res.data.sub_county;
                document.querySelector('input[name=address]').value = res.data.address;
            }
        }).catch((error) => {
            console.log(error);
        });
        allowSubmit();
    }).catch((error) => {
        console.log(error);
    });
});

function allowSubmit() {
    let profupdate = document.getElementById('profile-submit');

    profupdate.addEventListener('click', (event) => {
        event.preventDefault();
        axios.post('/profile/update', {
            phone_number: document.querySelector('input[name=phone_number]').value,
            dob: document.querySelector('input[name=year_of_birth]').value,
            education: document.querySelector('input[name=highest_level_of_education]').value,
            county: document.querySelector('input[name=county]').value,
            sub_county: document.querySelector('input[name=sub_county]').value,
            address: document.querySelector('input[name=address]').value,
        }).then((response) => {
            // Something here to show successfull transaction
            showinfo.innerHTML = '<div class="p-2"><div class="alert alert-primary" role="alert">Profile updated successfully!</div></div>';
            window.location = window.location.href;
        }).catch((error) => {
            console.log(error.response.data.errors);
            if (error.response.data.errors.phone_number) {
                document.getElementById('phone_err').classList.remove('d-none');
                document.getElementById('phone_err').innerHTML = error.response.data.errors.phone_number;
            } else {
                document.getElementById('phone_err').classList.add('d-none');
            }
            if (error.response.data.errors.dob) {
                document.getElementById('birth_err').classList.remove('d-none');
                document.getElementById('birth_err').innerHTML = error.response.data.errors.dob;
            } else {
                document.getElementById('birth_err').classList.add('d-none');
            }
            if (error.response.data.errors.education) {
                document.getElementById('education_err').classList.remove('d-none');
                document.getElementById('education_err').innerHTML = error.response.data.errors.education;
            } else {
                document.getElementById('education_err').classList.add('d-none');
            }
            if (error.response.data.errors.county) {
                document.getElementById('county_err').classList.remove('d-none');
                document.getElementById('county_err').innerHTML = error.response.data.errors.county;
            } else {
                document.getElementById('county_err').classList.add('d-none');
            }
            if (error.response.data.errors.sub_county) {
                document.getElementById('sub_err').classList.remove('d-none');
                document.getElementById('sub_err').innerHTML = error.response.data.errors.sub_county;
            } else {
                document.getElementById('sub_err').classList.add('d-none');
            }
            if (error.response.data.errors.address) {
                document.getElementById('add_err').classList.remove('d-none');
                document.getElementById('add_err').innerHTML = error.response.data.errors.address;
            } else {
                document.getElementById('add_err').classList.add('d-none');
            }
        })
    });
}

courseRegisterButton.addEventListener('click', (event) => {
    event.preventDefault();
    showinfo.innerHTML = 'loading...';
    axios.post('/status/check').then((response) => {
        if (response.data.profile_status == 'updated') {
            axios.get('/course-registration').then((response) => {
                showinfo.innerHTML = response.data;
                let courseupload = document.getElementById('course-upload');

                courseupload.addEventListener('click', (event) => {
                    event.preventDefault();

                    axios.post('/course/registration', {
                        course: document.querySelector('select[name=course]').value,
                        mode_of_study: document.querySelector('select[name=mode_of_study]').value,
                    }).then((response) => {
                        console.log(response.data);
                    }).catch((error) => {
                        console.log(error);
                    });
                });
            }).catch((error) => {
                console.log(error);
            });
        } else {
            axios.get('/course-registration').then((response) => {
                showinfo.innerHTML = response.data;
                document.getElementById('regNotification').classList.remove('d-none');
                document.getElementById('courseForm').classList.add('d-none');
                document.getElementById('course-upload').setAttribute('disabled', 'disabled');
                console.log(document.getElementById('course-upload'));
            });
        }
    }).catch();

});
