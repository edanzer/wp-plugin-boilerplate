const defaultConfig = require("./node_modules/@wordpress/scripts/config/webpack.config");

const path = require( 'path' );

module.exports = {

  ...defaultConfig,

  entry: {

    ...defaultConfig.entry,

    index: path.resolve( process.cwd(), 'src/assets', 'index.js' ),

    frontend: path.resolve( process.cwd(), 'src/assets', 'frontend.js' )

  }

};