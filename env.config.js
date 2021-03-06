const path = require("path");

module.exports = {
  THEME_NAME: "uw-madison-wp-2015",
  PROXY_TARGET: "cals.wisc.localhost",
  HOST: "localhost",
  PORT: 3000,
  PATHS: {
    src: unipath("src"),
    compiled: unipath(path.resolve(__dirname, "compiled")),
    modules: unipath("node_modules"),
    base: unipath(".")
  }
};

function unipath(base) {
  return function join() {
    const _paths = [base].concat(Array.from(arguments));
    return path.resolve(path.join.apply(null, _paths));
  };
}
