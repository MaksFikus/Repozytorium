(() => {
    const dataRegex = {
        'email': /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/,
        'password': /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/
    }

    const form = document.querySelector('#my_form')

    function validateNip(nip) {
        if (nip.length != 10) return false

        let sum = 0
        sum += (nip[0] * 6)
            + (nip[1] * 5)
            + (nip[2] * 7)
            + (nip[3] * 2)
            + (nip[4] * 3)
            + (nip[5] * 4)
            + (nip[6] * 5)
            + (nip[7] * 6)
            + (nip[8] * 7)
        
        if (sum % 11 != nip[9]) return false

        return true
    }

    form.addEventListener('submit', (e) => {
        e.preventDefault()

        const userInput = {
            'email': form.querySelector('[data-validate=email]'),
            'nip': form.querySelector('[data-validate=nip]'),
            'password': form.querySelector('[data-validate=password]'),
            'password-repeat': form.querySelector('[data-validate=password-repeat]'),
        }

        const userData = {}
        const errorHolders = {}

        for (var key in userInput) {
            userData[key] = userInput[key].value
            errorHolders[key] = userInput[key].parentElement.querySelector('.error-holder')
            errorHolders[key].innerHTML = ''
        }
        
        const validateInput = {
            'email': dataRegex['email'].test(userData['email']),
            'nip': validateNip(userData['nip']),
            'password': dataRegex['password'].test(userData['password']),
            'password-repeat': userData['password'] != userData['password-repeat'],
        }

        if (!dataRegex['email'].test(userData['email'])) {
            userInput['email'].classList.add('error')
            const errorMessage = document.createElement('p')
            errorMessage.innerText = 'Please enter a valid email address'

            errorHolders['email'].appendChild(errorMessage)
        } else {
            userInput['email'].classList.remove('error')
            errorHolders['email'].innerHTML = ''
        }

        if (!validateNip(userData['nip'])) {
            userInput['nip'].classList.add('error')
            const errorMessage = document.createElement('p')
            errorMessage.innerText = 'Please enter a valid NIP number'

            errorHolders['nip'].appendChild(errorMessage)
        } else {
            userInput['nip'].classList.remove('error')
            errorHolders['nip'].innerHTML = ''
        }

        if (!dataRegex['password'].test(userData['password'])) {
            userInput['password'].classList.add('error')
            const errorMessage = document.createElement('p')
            errorMessage.innerText = 'Please enter a valid password'

            errorHolders['password'].appendChild(errorMessage)
        } else {
            userInput['password'].classList.remove('error')
            errorHolders['password'].innerHTML = ''
        }

        if (userData['password'] != userData['password-repeat']) {
            userInput['password-repeat'].classList.add('error')
            const errorMessage = document.createElement('p')
            errorMessage.innerText = 'Passwords are not identical'

            errorHolders['password-repeat'].appendChild(errorMessage)
        } else {
            userInput['password-repeat'].classList.remove('error')
            errorHolders['password-repeat'].innerHTML = ''
        }

        // TODO: NIP validation - https://pl.wikipedia.org/wiki/Numer_identyfikacji_podatkowej

        // TODO: Password validation - min 8 characters, at least one uppercase letter, one lowercase letter, one number and one special character
        
        // TODO: Password confirmation validation - must be the same as password
    })
})()