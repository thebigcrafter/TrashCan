<p align="center">
<img src="icon.jpg" alt="logo" width="96px" height="96px" />
<h1 align="center">Trash Can</h1>
</p>

<p align="center">
<a href="https://github.com/thebigcrafter/TrashCan/blob/main/LICENSE"><img alt="GitHub" src="https://img.shields.io/github/license/thebigcrafter/TrashCan?style=for-the-badge"></a>
<a href="https://poggit.pmmp.io/p/Trash_Can"><img src="https://poggit.pmmp.io/shield.dl.total/Trash_Can?style=for-the-badge" alt="poggit"/></a>
<a href="https://discord.gg/PykBfE2TZ9"><img src="https://img.shields.io/discord/1087729577004122112?color=7289DA&label=discord&logo=discord&style=for-the-badge" alt="discord" /></a>
</p>

# 📖 About

A PocketMine-MP plugin adds to the server a command which shows a trash can when executed.

# ✅ Requirements

- PocketMine-MP API 5.0.0 or a compatible API 5 release.
- [InvMenu](https://github.com/Muqsit/InvMenu) is bundled as the plugin's virion dependency when the plugin is packaged.

The `/trashcan` command opens an empty chest-style inventory for players. Console senders and other non-player command senders receive an explanatory message instead.

# ⬇️ Installation

1. Download the latest version from GitHub Releases or Poggit CI below:
    - Stable version (Recommended for most users): [Latest](https://github.com/thebigcrafter/TrashCan/releases/latest) | [All releases](https://github.com/thebigcrafter/TrashCan/releases)
    - Build version (Only recommended for advanced users): [Poggit CI](https://poggit.pmmp.io/ci/thebigcrafter/TrashCan/~)
2. Drop the downloaded `TrashCan.phar` plugin file into your PocketMine-MP server's `plugins` directory.
3. Restart your server and you're ready to test the plugin!

# 📜 Commands

|   Command   |    Description    |
|:-----------:|:-----------------:|
| `/trashcan` | Open a trash can. |

The `trashcan.cmd` permission is enabled by default. Grant or revoke it with the server's normal permission management tools.

# 🛠️ Development

The repository contains a locked Composer development setup for PHPStan. Run `composer install` and `composer run analyse` before changing source code. The project also keeps its Poggit manifest for the existing build path; the declared InvMenu dependency must remain compatible with the builder and the target API before publishing a new artifact.

# ⚖️ License

Licensed under the [MIT license](https://github.com/thebigcrafter/TrashCan/blob/main/LICENSE).
