import axios from 'axios'

let base = "http://localhost/09takeout/takeout_tp5/public";

export const GET_SELLER = params => { return axios.get(`${base}/seller`,{params:params})};