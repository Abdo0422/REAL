const reactPlugin = require('@vitejs/plugin-react')
const { defineConfig } = require('vite')

module.exports = defineConfig({
  plugins: [reactPlugin()],
  resolve: {
    alias: {
      '@': '/public'
    }
  },
})
