

const App = (function(UIController){

    //const Vitrains = UIController.getAllVitrains();

    function LoadListeners(){
        UIController.handlePopupClick();
    }

    return {
        init: function(){
            LoadListeners();
        }
    }

})(UIController);


App.init();











