/**
 * Imports the Roast API URL from the config.
 */
import { ROAST_CONFIG } from '../config.js';

export default {
    /**
     * GET /api/v1/lists
     */
    getLists: function(){
        return axios.get( ROAST_CONFIG.API_URL + '/lists' );
    },

    /**
     * GET /api/v1/info/{infoID}
     */
    getInfo: function( infoID ){
        return axios.get( ROAST_CONFIG.API_URL + '/info/' + infoID );
    },
    /**
     * POST /api/v1/info
     */
    newInfo: function (params) {
        return axios.post( ROAST_CONFIG.API_URL + '/info', params);
    }
}
