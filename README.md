# WP Composer Package Template

A Docker-based boilerplate for professional WordPress package development. It provides a complete, pre-configured environment for coding, testing, and quality assurance, with a strong focus on automation.

This project uses a set of wrapper scripts to simplify all Docker and Composer interactions. For detailed documentation on these commands, please see the **[./bin/README.md](./bin/README.md)** file. For details on the Docker environment itself, see the **[./docker/README.md](./docker/README.md)** file.

---

## Getting Started

Follow these steps to set up and run your development environment.

### Step 1: Rename Placeholders

**This is the most important step.** Before you do anything else, you must search and replace all placeholder strings throughout the entire project.

| Placeholder                        | Replace With                                     | Example             |
| ---------------------------------- | ------------------------------------------------ | ------------------- |
| `wp-composer-package-template`     | Your package's slug (e.g., `my-awesome-widget`). | `my-awesome-widget` |
| `wp-composer-pkg`                  | Your PHP package's short prefix or text domain.  | `my-widget`         |
| `WPTechnix`                        | Your vendor/author name (PascalCase).            | `AcmeCorp`          |
| `WPComposerPackage`                | Your PHP namespace (PascalCase).                 | `MyAwesomeWidget`   |
| `developers@wptechnix.com`         | Your author email address.                       | `dev@acmecorp.com`  |

### Step 2: Installation

Execute these commands in your terminal from the project root.

```bash
# 1. Copy all configuration files (e.g., phpunit.xml.dist -> phpunit.xml)
./bin/copy

# 2. Build and start the Docker services in the background
./bin/docker build
./bin/docker up

# 3. Install PHP dependencies using the Composer wrapper
# This runs *inside* the container you just started.
./bin/composer install

# 4. Install Git Hooks (Optional, but Recommended)
# This uses Husky to validate your commit messages.
npm install
```

Your environment is now running and ready for development.

## Automated Workflows

This project uses GitHub Actions to automate testing, code validation, and releases.

*   **Continuous Integration:** On every push and pull request, actions will run all tests (PHPUnit), check code style (PHPCS), and perform static analysis (PHPStan).
*   **Release Management:** The release process is fully automated. When commits with features or fixes are pushed to `main`, a workflow will automatically determine the next version number, tag the release, and generate a `CHANGELOG.md`. Note: For development purpose this is commented to be trigger automatically on push and added on trigger.

## Commit Message Format

The automated release process requires that all commit messages follow the [Conventional Commits](https://www.conventionalcommits.org/) specification. This is enforced by a linting check on all pull requests.

-   `feat:` A new feature. **(Triggers a `minor` release)**
-   `fix:` A bug fix. **(Triggers a `patch` release)**
-   `chore:`, `docs:`, `test:`, etc. **(Does not trigger a release)**
-   A `BREAKING CHANGE:` footer will trigger a **`major`** release.