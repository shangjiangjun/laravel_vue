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
     * GET /api/v1/infos/{infoID}
     */
    getInfo: function( infoID ){
        return axios.get( ROAST_CONFIG.API_URL + '/lists/' + infoID );
    }
}
