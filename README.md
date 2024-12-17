# ⚡️ create-vite-block

This repository demonstrates how the <a href="https://github.com/mrOttoW/vite-wordpress">vite-wordpress</a> node package and <a href="https://github.com/mrOttoW/vite-wordpress-php">vite-wordpress-php</a> composer package can be used within a WordPress plugin to create a block.

## Installation

1. Clone repo into a new plugin folder called `create-vite-block`

2. Install the composer package
    ```bash
    composer install
    ```
3. In your local environment, install the node packages via npm or yarn:
    ```bash
    npm install
    # or
    yarn install
    ```
4. Create an initial build from the uncompiled files.
    ```bash
    npm run build
    # or
    yarn build
    ```
5. Start development server on your local environment
    ```bash
    npm run start
    # or
    yarn start
    ```
6. Ensure you refresh the WordPress page you're on (once) so the page loads the injected Vite client.

### Base
If you're not using a traditional WordPress setup or want to use a different plugin folder/name, update the `base` in `vite.config.js`.

### Local environment / DDEV
When using a local environment like DDEV, make sure to install the Node packages on the server via SSH and ensure the ports are exposed.

(Default port configured in Vite: `5173`). 

For DDEV, you can use the following addon: https://github.com/mrOttoW/ddev-wordpress-vite