

const UIController = (function () {

    //Private
    const selectors = {
        service_panel: ".services-panel"
    }

    const popupSelectors = {
        popup_container: ".popup",
        close_icon_class: "fa-times",
        close_icon:"fas fa-times",
        vitrains: ".vitrain-image"
    }

    const vitrains = {
        vitrain1: {
            id: "#breakfast",
            image: '<img src="./public/images/breakfast.jpg">'
        },
        vitrain2: {
            id: "#twin-burgers",
            image: '<img src="./public/images/twoburger.jpg">'
        },
        vitrain3: {
            id: "#sandwich",
            image: '<img src="./public/images/sandwich.jpg">'
        },
        vitrain4: {
            id: "#desert",
            image: '<img src="./public/images/desert.jpeg">'
        },
        vitrain5: {
            id: "#macaronni",
            image: '<img src="./public/images/macaronni.jpg">'
        },
        vitrain6: {
            id: "#chickens",
            image: '<img src="./public/images/chickens.jpg">'
        },
        vitrain7: {
            id: "#creps",
            image: '<img src="./public/images/creps.jpg">'
        },
        vitrain8: {
            id: "#salad",
            image: '<img src="./public/images/salad.jpg">'
        },
        vitrain9: {
            id: "#bieber",
            image: '<img src="./public/images/bieber.jpg">'
        },
        vitrain10: {
            id: "#mini-creps",
            image: '<img src="./public/images/s.jpg">'
        }
    }


    //Public
    return {

        //CREATION OF SERVICES MODAL
        createModal: async function (image) {

            let popup =  `
            <div class="popup-overlay">
              <div class="popup">
              <i id="close-btn" class="${popupSelectors.close_icon}"></i>
                ${image}
              </div>
            </div>`;

            let popupDiv = document.createElement("div");
            popupDiv.classList.add("popup");
            popupDiv.innerHTML = popup;
            return await document.querySelector(selectors.service_panel).insertAdjacentElement("beforeend", popupDiv);

        },

        // OPEN AND CLOSE OF SERVICES MODAL
        openModal: async function (image) {
            if(document.querySelector(selectors.service_panel).children.length<2){
                let createdPopup = await this.createModal(image);
                return createdPopup.addEventListener("click", (e) => {
                    if (e.target.classList.contains(popupSelectors.close_icon_class)  || e.target.classList.contains("services-panel") || e.target.nodeName !== "IMG" ) {
                        document.querySelectorAll(popupSelectors.popup_container).forEach(container => {
                            container.remove();
                        })
                    };
                });
            }
           
        },


        //
        handlePopupClick: function () {
            document.querySelectorAll(popupSelectors.vitrains)
                .forEach(vitrain => {
                    vitrain.addEventListener("click", () => {
                        switch (vitrain.id) {
                            case "breakfast":
                                this.openModal(vitrains.vitrain1.image);
                                break;
                            case "twin-burgers":
                                this.openModal(vitrains.vitrain2.image);
                                break;
                            case "sandwich":
                                this.openModal(vitrains.vitrain3.image);
                                break;
                            case "desert":
                                this.openModal(vitrains.vitrain4.image);
                                break;
                            case "macaronni":
                                this.openModal(vitrains.vitrain5.image);
                                break;
                            case "chickens":
                                this.openModal(vitrains.vitrain6.image);
                                break;
                            case "creps":
                                this.openModal(vitrains.vitrain7.image);
                                break;
                            case "salad":
                                this.openModal(vitrains.vitrain8.image);
                                break;
                            case "bieber":
                                this.openModal(vitrains.vitrain9.image);
                                break;
                            case "mini-crep":
                                this.openModal(vitrains.vitrain10.image);
                                break;
                        }
                    });
                });
        },


        //GET ALL POPUP SELECTORS
        getAllPopupSelectors: function () {
            return popupSelectors;
        },

        //GET ALL POPUP SELECTORS
        getAllVitrains: function () {
            return vitrains;
        }

    };
})();