const webpack = require("webpack")
module.exports = {
    configureWebpack: config => {
        config.optimization = {
            splitChunks: {
                cacheGroups: {
                    commons: {
                      chunks: "initial",
                    }
                  }
            }
        }
        config.plugins.concat([
            new webpack.ProvidePlugin({
                jquery: "jquery",
                $: "jquery"
            })
        ])
    }
}