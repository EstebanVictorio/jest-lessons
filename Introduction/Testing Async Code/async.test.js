import fetchData from './fetchData';


//<editor-fold desc="Intentional Non-working Code">
/*test('the data is peanut butter', done=>{
    function callback(data){
        expect(data).toBe({name:'Esteban'});
        done();
    }
    fetchData(callback);
});*/
//</editor-fold>
test('Object name Esteban', () => {
    expect.assertions(1);
    return fetchData().then(json => {
        expect(json).toEqual({name:'Esteban'});
    });
});