(function() {
    /*
     * first param - name of the module
     * second paramd - future dependencies
     */
    var app = angular.module('store', []);

    // create a controller
    app.controller('StoreController', function() {
        this.products = gems;
    });

    var gems = [
        {
            name: 'Dodecahedron',
            price: 2.95,
            description: '...',
            canPurchase: true,
            soldOut: false
        },
        {
            name: 'Pentagonal Gem',
            price: 5.95,
            description: '...',
            canPurchase: false,
            soldOut: false
        }, 
    ];
})();