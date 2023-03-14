document.addEventListener('DOMContentLoaded', function() {
    const btLiveChat = document.getElementById('live-chat');
    const btCloseLiveChat = document.getElementById('close-chat-modal');
    const liveChatModal = document.getElementById('live-chat-modal');
    const btLogin = document.getElementById('nav-home-tab');
    const btRegister = document.getElementById('nav-profile-tab');
    const bodyLogin = document.getElementById('body-login');
    const bodyRegister = document.getElementById('body-register');
    const registerSubmit = document.querySelector('[name="register"]');

    btLogin.addEventListener('click', function() {
        console.log('Login');
        bodyLogin.classList.remove('d-none');
        bodyRegister.classList.remove('show');
        bodyRegister.classList.add('d-none');
    });

    btRegister.addEventListener('click', function() {
        console.log('Register');
        bodyRegister.classList.remove('d-none');
        bodyRegister.classList.add('show');
        bodyLogin.classList.add('d-none');
    });

    // registerSubmit.addEventListener('click', function(e) {
    //     e.preventDefault();
    //     console.log('Register Submit');
    //     axios.post('/api/register', {
    //         name: document.querySelector('[name="name3"]').value,
    //         password: document.querySelector('[name="password3"]').value,
    //         email: document.querySelector('[name="email3"]').value
    //     })
    //     .then(function (response) {
    //         if(response.status == 201) {
    //             document.querySelector('[name="name3"]').value = '';
    //             document.querySelector('[name="password3"]').value = '';
    //             document.querySelector('[name="email3"]').value = '';
    //         }
    //     })
    // })

    btLiveChat.addEventListener('click', (e) => {
        console.log('Live Chat')
        btLiveChat.classList.add('d-none')
        liveChatModal.classList.remove('d-none')
    })

    btCloseLiveChat.addEventListener('click', () => {
        console.log('Close Live Chat')
        liveChatModal.classList.add('d-none')
        btLiveChat.classList.remove('d-none')
    })
})