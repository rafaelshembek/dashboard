main.factory('getFieldsInput', function(){
    var getInput = {};

    getInput.get = (...input) => {
        return input;
    }

    return getInput;
})