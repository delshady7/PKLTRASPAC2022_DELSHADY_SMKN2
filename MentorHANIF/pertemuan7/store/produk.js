import axios from 'axios'
export const state = () => ({
    product: [],
})
export const actions = {
    async getData({commit}){
        try{
            await axios.get("https://dummyjson.com/products").then(result => {
                commit("SET_PRODUCT", result.data.products)
            })
        }catch(error){
            alert(error);
            console.log(error);
        }
    }
}
export const mutations = {
    SET_PRODUCT(state, product){
        state.product = product;
    }
}