/** @type {import('next').NextConfig} */
var webpack = require("webpack");

const config = {
  	reactStrictMode: true,
	plugins: [
		
	]
}

config.plugins.push(
	new webpack.ProgressPlugin((percentage, message, ...args) => {
		// e.g. Output each progress message directly to the console:
		process.stdout.write(percentage, message, ...args);
		console.info(percentage, message, ...args);
	})
);

module.exports = config