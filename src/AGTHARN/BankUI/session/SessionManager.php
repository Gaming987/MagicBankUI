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
 namespace AGTHARN\BankUI\session; use pocketmine\player\Player; use AGTHARN\BankUI\session\type\PlayerSession; use AGTHARN\BankUI\session\type\OfflineSession; class SessionManager { public const SESSION_TYPE_PLAYER = 0; public const SESSION_TYPE_OFFLINE = 1; private array $playerSessions = []; private array $offlineSessions = []; public function createSession(Player|string $ce8df0428c0d5fc2c96cece4d007) : Session { if (!$ce8df0428c0d5fc2c96cece4d007 instanceof Player) { goto Ck1eItPo2dxL8ukr21uQIeZVU1Xh140e9b180dec5d1bfdb2cbb77f8; } return $this->playerSessions[$ce8df0428c0d5fc2c96cece4d007->getUniqueId()->toString()] = new PlayerSession($ce8df0428c0d5fc2c96cece4d007); Ck1eItPo2dxL8ukr21uQIeZVU1Xh140e9b180dec5d1bfdb2cbb77f8: return $this->offlineSessions[$ce8df0428c0d5fc2c96cece4d007] = new OfflineSession($ce8df0428c0d5fc2c96cece4d007); } public function removeSession(Player|string $ce8df0428c0d5fc2c96cece4d007) : bool { goto deFEReqZ8l929oGvrcDti0gxK1G_0e674d7c5480969d8a5cfcdebe7; EcpZ5FwOP6AY33Ua6bMIp_tG5Y6Pc97c29ef063c03884ae97da83c3: return true; c3WU1Qs8wYtZWehD51481X8BcXlXff77f1c5f9bb8ce44047f864b93: goto Dsu6UcNP2BmlfNIt2XcAGNVM1xIwd9c38af02554ee9bf8a2af6fde9; Dsu6UcNP2BmlfNIt2XcAGNVM1xIwd9c38af02554ee9bf8a2af6fde9: return false; dwTgT4M83loTBg3VBfH5PPRwP6EW5f4f430815764ff64e83335f067: goto CjGINSPWDs0srrmdbbsKhMklrDkV52aaf33a5bd9994c89aced15a53; ACx9q8yvWU0KYCexJzv2EmwZExcf2609861f77eba4dea1fe55fa60c: $this->playerSessions[$ce8df0428c0d5fc2c96cece4d007->getUniqueId()->toString()]->saveData(); unset($this->playerSessions[$ce8df0428c0d5fc2c96cece4d007->getUniqueId()->toString()]); goto EcpZ5FwOP6AY33Ua6bMIp_tG5Y6Pc97c29ef063c03884ae97da83c3; f3SXThfUl4Yf4hiGLkiz_IlWDhcgff3b50f543cc112ad123e93a50c: Cd8kP_EheFJ6Zr9N89Vbt1GXAw1v4c533e50e6c3d8708789be7a201: return false; goto ahr0yWXMGWqe77LC0TgUh47Kjazs11bdf7ae798c46e3f4f5046d0a1; CjGINSPWDs0srrmdbbsKhMklrDkV52aaf33a5bd9994c89aced15a53: if (!isset($this->offlineSessions[$ce8df0428c0d5fc2c96cece4d007])) { goto Cd8kP_EheFJ6Zr9N89Vbt1GXAw1v4c533e50e6c3d8708789be7a201; } $this->offlineSessions[$ce8df0428c0d5fc2c96cece4d007]->saveData(); goto fuotcoyrZUB6uqOhtolfz5t6Nmzz5d5c961bb645d711d54e05c3162; deFEReqZ8l929oGvrcDti0gxK1G_0e674d7c5480969d8a5cfcdebe7: if (!$ce8df0428c0d5fc2c96cece4d007 instanceof Player) { goto dwTgT4M83loTBg3VBfH5PPRwP6EW5f4f430815764ff64e83335f067; } if (!isset($this->playerSessions[$ce8df0428c0d5fc2c96cece4d007->getUniqueId()->toString()])) { goto c3WU1Qs8wYtZWehD51481X8BcXlXff77f1c5f9bb8ce44047f864b93; } goto ACx9q8yvWU0KYCexJzv2EmwZExcf2609861f77eba4dea1fe55fa60c; fuotcoyrZUB6uqOhtolfz5t6Nmzz5d5c961bb645d711d54e05c3162: unset($this->offlineSessions[$ce8df0428c0d5fc2c96cece4d007]); return true; goto f3SXThfUl4Yf4hiGLkiz_IlWDhcgff3b50f543cc112ad123e93a50c; ahr0yWXMGWqe77LC0TgUh47Kjazs11bdf7ae798c46e3f4f5046d0a1: } public function getSession(Player|string $ce8df0428c0d5fc2c96cece4d007) : Session { if (!$ce8df0428c0d5fc2c96cece4d007 instanceof Player) { goto fZS3GCgP4fEqi0eL5weHei333RKMbb42a4f04e5900ec20e8cffff2e; } return $this->playerSessions[$ce8df0428c0d5fc2c96cece4d007->getUniqueId()->toString()] ?? $this->createSession($ce8df0428c0d5fc2c96cece4d007); fZS3GCgP4fEqi0eL5weHei333RKMbb42a4f04e5900ec20e8cffff2e: return $this->offlineSessions[$ce8df0428c0d5fc2c96cece4d007] ?? $this->createSession($ce8df0428c0d5fc2c96cece4d007); } public function getSessions(int $A2f2c6a787d2ca486beb74286fce) : array { return match ($A2f2c6a787d2ca486beb74286fce) { self::SESSION_TYPE_PLAYER => $this->playerSessions, self::SESSION_TYPE_OFFLINE => $this->offlineSessions, default => [], }; } }
