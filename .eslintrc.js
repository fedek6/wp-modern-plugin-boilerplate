module.exports = {
  extends: [
    "airbnb-typescript/base",
    "plugin:@typescript-eslint/recommended",
    "prettier",
    "plugin:prettier/recommended",
  ],
  plugins: ["@typescript-eslint"],
  env: {
    browser: true,
    es6: true
  },
  globals: {
    Atomics: "readonly",
    SharedArrayBuffer: "readonly",
  },
  parser: "@typescript-eslint/parser",
  parserOptions: {
    ecmaVersion: 2018,
    sourceType: "module",
    project: "./tsconfig.json",
  },
  rules: {
    "linebreak-style": "off",
    "prettier/prettier": [
      "error",
      {
        endOfLine: "auto",
      },
    ],
  },
};
