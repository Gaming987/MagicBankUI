<?php
/**
 * ███╗░░░███╗░█████╗░░██████╗░██╗░█████╗░░██████╗░░█████╗░███╗░░░███╗███████╗░██████╗
 * ████╗░████║██╔══██╗██╔════╝░██║██╔══██╗██╔════╝░██╔══██╗████╗░████║██╔════╝██╔════╝
 * ██╔████╔██║███████║██║░░██╗░██║██║░░╚═╝██║░░██╗░███████║██╔████╔██║█████╗░░╚█████╗░
 * ██║╚██╔╝██║██╔══██║██║░░╚██╗██║██║░░██╗██║░░╚██╗██╔══██║██║╚██╔╝██║██╔══╝░░░╚═══██╗
 * ██║░╚═╝░██║██║░░██║╚██████╔╝██║╚█████╔╝╚██████╔╝██║░░██║██║░╚═╝░██║███████╗██████╔╝
 * ╚═╝░░░░░╚═╝╚═╝░░╚═╝░╚═════╝░╚═╝░╚════╝░░╚═════╝░╚═╝░░╚═╝╚═╝░░░░░╚═╝╚══════╝╚═════╝░
 * Auto Generated on: 29 May 2022, 12:48:13 AM - UTC
 * 
 *    Copyright 2022 MagicGames
 *    Licensed under the Apache License, Version 2.0 (the 'License');
 *    you may not use this file except in compliance with the License.
 *    You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 *    Unless required by applicable law or agreed to in writing, software
 *    distributed under the License is distributed on an 'AS IS' BASIS,
 *    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *    See the License for the specific language governing permissions and
 *    limitations under the License.
 * 
 * 
 * This is a project from MagicGames. Obfuscated with YAK Pro with multiple modifications.
 * Other projects by MagicGames can be found on our GitHub organisation.
 * No support will be provided.
 * 
 * GitHub: https://github.com/MagicGames-Network
 * Discord: https://discord.gg/32xh5mqe7F
 */
 namespace AGTHARN\BankUI; use pocketmine\plugin\PluginBase; use AGTHARN\BankUI\task\InterestTask; use AGTHARN\BankUI\command\BankCommand; use AGTHARN\BankUI\session\SessionManager; class Main extends PluginBase { private static Main $instance; private SessionManager $sessionManager; public array $leaderBoard; public static function getInstance() : Main { return self::$instance; } public function onEnable() : void { goto d0pLz0ceS7LNIi4c_4v303f03drebd6e00cb46ee904bc1ffc0fc0d8; eH2c33Q4M6x7PyEe76p3tos_gtNPe80c03430607228c4581d5bcdaf: $this->sessionManager = new SessionManager(); $this->loadLeaderBoard(); goto dl4_AshDgZDlenfEthFAPUcIG9Va543e1ce4fa54d4e5ce6338aa878; B7oWwH7l51eNEmwSVoCleyQlld9B8579e85440ee55f39654df154c6: $this->getScheduler()->scheduleRepeatingTask(new InterestTask(), 60 * 60 * 20); goto COhrVXDuwwrdUBbNVMP3Y5CE1ZAJ711b7a5ddd8b64af6f03c267fa2; dl4_AshDgZDlenfEthFAPUcIG9Va543e1ce4fa54d4e5ce6338aa878: $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this); $this->getServer()->getCommandMap()->register("\x62\141\x6e\x6b\x75\x69", new BankCommand($this, "\x62\x61\x6e\153", "\x4f\160\145\x6e\163\40\x54\150\x65\x20\102\x61\x6e\153\x55\111\41", ["\x62\141\156\x6b\165\x69"])); goto B7oWwH7l51eNEmwSVoCleyQlld9B8579e85440ee55f39654df154c6; d0pLz0ceS7LNIi4c_4v303f03drebd6e00cb46ee904bc1ffc0fc0d8: @mkdir($this->getDataFolder() . "\144\x61\164\141"); self::$instance = $this; goto eH2c33Q4M6x7PyEe76p3tos_gtNPe80c03430607228c4581d5bcdaf; COhrVXDuwwrdUBbNVMP3Y5CE1ZAJ711b7a5ddd8b64af6f03c267fa2: } public function onDisable() : void { $this->saveLeaderBoard(); } public function loadLeaderBoard() : void { goto bhlkVnitsi9pOhiA3L_UyqNT8SvN1153951d909711242fb61af475e; bhlkVnitsi9pOhiA3L_UyqNT8SvN1153951d909711242fb61af475e: $this->saveResource("\x74\x6f\160\56\152\x73\x6f\x6e"); $b06b2dc2c32e4170bd49bfb590c9 = file_get_contents($this->getDataFolder() . "\164\x6f\x70\x2e\152\x73\x6f\x6e"); goto fxrVOluy3UrHuf35o13Rz_OZAxkg21b715dff5a9cc057ff23efa214; A233P5jLP7SwRIb2c6Ng3M6x2Jssbfff052f075f2c80c31030602d9: c9x4d9Gvj5sZOfP1g9vySYb8Grl0c604c69d05bb0f0109df3c86993: goto DFhRAd5FkFl_FAY4tve1KWdRY8nH68f24c29293e63c1dcbeb8b3c56; fxrVOluy3UrHuf35o13Rz_OZAxkg21b715dff5a9cc057ff23efa214: if (!is_string($b06b2dc2c32e4170bd49bfb590c9)) { goto c9x4d9Gvj5sZOfP1g9vySYb8Grl0c604c69d05bb0f0109df3c86993; } $this->leaderBoard = json_decode($b06b2dc2c32e4170bd49bfb590c9, true); goto A233P5jLP7SwRIb2c6Ng3M6x2Jssbfff052f075f2c80c31030602d9; DFhRAd5FkFl_FAY4tve1KWdRY8nH68f24c29293e63c1dcbeb8b3c56: } public function saveLeaderBoard() : void { $E9f0017f0520197596740014bbb1 = json_encode($this->leaderBoard); if (!is_string($E9f0017f0520197596740014bbb1)) { goto Bc_7am4X1COKGOliqK5yzPTU0BH24bc4943be32e7151ac223377e2b; } file_put_contents($this->getDataFolder() . "\x74\157\x70\56\152\163\157\x6e", $E9f0017f0520197596740014bbb1); Bc_7am4X1COKGOliqK5yzPTU0BH24bc4943be32e7151ac223377e2b: } public function getSessionManager() : SessionManager { return $this->sessionManager; } }
