const departmentCardsWrappers = document.querySelectorAll(".departmentsCardWrapper");
        const departmentsPopupHDesktop = document.querySelector('.departmentsPopupHDesktop');
        const departmentsPopupPDesktop = document.querySelector('.departmentsPopupPDesktop');
        const departmentsPopupDesktop = document.querySelector('.departmentsPopupDesktop');
        const departmentsPopupIMGDesktop = document.querySelector('.departmentsPopupIMGDesktop');
        let activeCard;

    departmentCardsWrappers.forEach(cardWrapper => {
        const departmentCard = cardWrapper.querySelector(".departmentsCard");
        const departmentPopup = cardWrapper.querySelector(".departmentsPopup");
        const departmentArrow = cardWrapper.querySelector('.departmentsArrow');
        const departmentIMG =cardWrapper.querySelector('.departmentsIMG')

        departmentCard.addEventListener("click", () => {
            if (departmentPopup.classList.contains('hide') || departmentsPopupDesktop.classList.contains('hide')) {
                if (activeCard) {
                    activeCard.querySelector(".departmentsPopup").classList.add('hide');
                    activeCard.querySelector('.departmentsArrow').classList.remove('rotate');
                    activeCard.querySelector('.departmentsCard').classList.remove('departmentsActiveCard')
                }
                
                departmentPopup.classList.remove('hide');
                departmentArrow.classList.add('rotate');
                departmentsPopupHDesktop.textContent = cardWrapper.querySelector(".departmentsPopupH").textContent;
                departmentsPopupPDesktop.textContent = cardWrapper.querySelector(".departmentsPopupP").textContent;
                departmentsPopupIMGDesktop.src = departmentIMG.src;
                departmentsPopupDesktop.classList.remove('hide');
                departmentCard.classList.add('departmentsActiveCard')
                
                activeCard = cardWrapper;
            } else {
                departmentPopup.classList.add('hide');
                departmentArrow.classList.remove('rotate');
                departmentCard.classList.remove('departmentsActiveCard')
                departmentsPopupDesktop.classList.add('hide');

                activeCard = null;
            }
        });
    });