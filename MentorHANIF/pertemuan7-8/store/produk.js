import axios from 'axios'
export const state = () => ({
    product: [],
})
export const getters = {
    search(state){
        state.product
    }
}
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
    },
    async removeData({commit}, product){
        try{
            await axios.delete("https://dummyjson.com/products/3").then(result => {
                commit("DELETE_PRODUCT", product);
            })
        }catch(error){
            alert(error);
            console.log(error);
        }
    },
    async updateData({commit}, product){
        try{
            await axios.put("https://dummyjson.com/products/1", {params: product}).then(result => {
                commit("UPDATE_PRODUCT", product)
            })
        }catch(error){
            alert(error);
            console.log(error);
        }
    },
    async addData({commit}, product){
        try{
            await axios.post("https://dummyjson.com/products/add", {params: product}).then(result => {
                commit("ADD_PRODUCT", product)
            })
        }catch(error){
            alert(error);
            console.log(error);
        }
    },
    async searchData({commit}, cari){
        try{
            await axios.get(`https://dummyjson.com/products/search?q=${cari}`).then(result => {
                commit("SEARCH_PRODUCT", result.data.products)
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
    },
    DELETE_PRODUCT(state, i){
        state.product.splice(state.product.indexOf(i), 1);
    },
    UPDATE_PRODUCT(state, product){
        state.product.push(product);
    },
    ADD_PRODUCT(state, product){
        state.product.push(product);
    },
    SEARCH_PRODUCT(state, product){
        state.product = product;
    }
}