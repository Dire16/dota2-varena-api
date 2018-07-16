/*
Navicat MySQL Data Transfer

Source Server         : phpstudy
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : dotaapp

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-07-16 22:13:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for heroavatar
-- ----------------------------
DROP TABLE IF EXISTS `heroavatar`;
CREATE TABLE `heroavatar` (
  `hero_id` int(5) NOT NULL,
  `cn_name` varchar(255) DEFAULT NULL,
  `en_name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`hero_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of heroavatar
-- ----------------------------
INSERT INTO `heroavatar` VALUES ('1', '敌法师', 'Anti-Mage', 'antimage_hphover.png');
INSERT INTO `heroavatar` VALUES ('2', '斧王', 'Axe', 'axe_hphover.png');
INSERT INTO `heroavatar` VALUES ('3', '祸乱之源', 'Bane', 'bane_hphover.png');
INSERT INTO `heroavatar` VALUES ('4', '嗜血狂魔', 'Bloodseeker', 'bloodseeker_hphover.png');
INSERT INTO `heroavatar` VALUES ('5', '水晶室女', 'Crystal Maiden', 'crystal_maiden_hphover.png');
INSERT INTO `heroavatar` VALUES ('6', '卓尔游侠', 'Drow Ranger', 'drow_ranger_hphover.png');
INSERT INTO `heroavatar` VALUES ('7', '撼地者', 'Earthshaker', 'earthshaker_hphover.png');
INSERT INTO `heroavatar` VALUES ('8', '主宰', 'Juggernaut', 'juggernaut_hphover.png');
INSERT INTO `heroavatar` VALUES ('9', '米拉娜', 'Mirana', 'mirana_hphover.png');
INSERT INTO `heroavatar` VALUES ('10', '变体精灵', 'Morphling', 'morphling_hphover.png');
INSERT INTO `heroavatar` VALUES ('11', '影魔', 'Shadow Fiend', 'nevermore_hphover.png');
INSERT INTO `heroavatar` VALUES ('12', '幻影长矛手', 'Phantom Lancer', 'phantom_lancer_hphover.png');
INSERT INTO `heroavatar` VALUES ('13', '帕克', 'Puck', 'puck_hphover.png');
INSERT INTO `heroavatar` VALUES ('14', '帕吉', 'Pudge', 'pudge_hphover.png');
INSERT INTO `heroavatar` VALUES ('15', '剃刀', 'Razor', 'razor_hphover.png');
INSERT INTO `heroavatar` VALUES ('16', '沙王', 'Sand King', 'sand_king_hphover.png');
INSERT INTO `heroavatar` VALUES ('17', '风暴之灵', 'Storm Spirit', 'storm_spirit_hphover.png');
INSERT INTO `heroavatar` VALUES ('18', '斯温', 'Sven', 'sven_hphover.png');
INSERT INTO `heroavatar` VALUES ('19', '小小', 'Tiny', 'tiny_hphover.png');
INSERT INTO `heroavatar` VALUES ('20', '复仇之魂', 'Vengeful Spirit', 'vengefulspirit_hphover.png');
INSERT INTO `heroavatar` VALUES ('21', '风行者', 'Windranger', 'windrunner_hphover.png');
INSERT INTO `heroavatar` VALUES ('22', '宙斯', 'Zeus', 'zuus_hphover.png');
INSERT INTO `heroavatar` VALUES ('23', '昆卡', 'Kunkka', 'kunkka_hphover.png');
INSERT INTO `heroavatar` VALUES ('25', '莉娜', 'Lina', 'lina_hphover.png');
INSERT INTO `heroavatar` VALUES ('26', '莱恩', 'Lion', 'lion_hphover.png');
INSERT INTO `heroavatar` VALUES ('27', '暗影萨满', 'Shadow Shaman', 'shadow_shaman_hphover.png');
INSERT INTO `heroavatar` VALUES ('28', '斯拉达', 'Slardar', 'slardar_hphover.png');
INSERT INTO `heroavatar` VALUES ('29', '潮汐猎人', 'Tidehunter', 'tidehunter_hphover.png');
INSERT INTO `heroavatar` VALUES ('30', '巫医', 'Witch Doctor', 'witch_doctor_hphover.png');
INSERT INTO `heroavatar` VALUES ('31', '巫妖', 'Lich', 'lich_hphover.png');
INSERT INTO `heroavatar` VALUES ('32', '力丸', 'Riki', 'riki_hphover.png');
INSERT INTO `heroavatar` VALUES ('33', '谜团', 'Enigma', 'enigma_hphover.png');
INSERT INTO `heroavatar` VALUES ('34', '修补匠', 'Tinker', 'tinker_hphover.png');
INSERT INTO `heroavatar` VALUES ('35', '狙击手', 'Sniper', 'sniper_hphover.png');
INSERT INTO `heroavatar` VALUES ('36', '瘟疫法师', 'Necrophos', 'necrolyte_hphover.png');
INSERT INTO `heroavatar` VALUES ('37', '术士', 'Warlock', 'warlock_hphover.png');
INSERT INTO `heroavatar` VALUES ('38', '兽王', 'Beastmaster', 'beastmaster_hphover.png');
INSERT INTO `heroavatar` VALUES ('39', '痛苦女王', 'Queen of Pain', 'queenofpain_hphover.png');
INSERT INTO `heroavatar` VALUES ('40', '剧毒术士', 'Venomancer', 'venomancer_hphover.png');
INSERT INTO `heroavatar` VALUES ('41', '虚空假面', 'Faceless Void', 'faceless_void_hphover.png');
INSERT INTO `heroavatar` VALUES ('42', '冥魂大帝', 'Wraith King', 'skeleton_king_hphover.png');
INSERT INTO `heroavatar` VALUES ('43', '死亡先知', 'Death Prophet', 'death_prophet_hphover.png');
INSERT INTO `heroavatar` VALUES ('44', '幻影刺客', 'Phantom Assassin', 'phantom_assassin_hphover.png');
INSERT INTO `heroavatar` VALUES ('45', '帕格纳', 'Pugna', 'pugna_hphover.png');
INSERT INTO `heroavatar` VALUES ('46', '圣堂刺客', 'Templar Assassin', 'templar_assassin_hphover.png');
INSERT INTO `heroavatar` VALUES ('47', '冥界亚龙', 'Viper', 'viper_hphover.png');
INSERT INTO `heroavatar` VALUES ('48', '露娜', 'Luna', 'luna_hphover.png');
INSERT INTO `heroavatar` VALUES ('49', '龙骑士', 'Dragon Knight', 'dragon_knight_hphover.png');
INSERT INTO `heroavatar` VALUES ('50', '戴泽', 'Dazzle', 'dazzle_hphover.png');
INSERT INTO `heroavatar` VALUES ('51', '发条技师', 'Clockwerk', 'rattletrap_hphover.png');
INSERT INTO `heroavatar` VALUES ('52', '拉席克', 'Leshrac', 'leshrac_hphover.png');
INSERT INTO `heroavatar` VALUES ('53', '先知', 'Nature\'s Prophet', 'furion_hphover.png');
INSERT INTO `heroavatar` VALUES ('54', '噬魂鬼', 'Lifestealer', 'life_stealer_hphover.png');
INSERT INTO `heroavatar` VALUES ('55', '黑暗贤者', 'Dark Seer', 'dark_seer_hphover.png');
INSERT INTO `heroavatar` VALUES ('56', '克林克兹', 'Clinkz', 'clinkz_hphover.png');
INSERT INTO `heroavatar` VALUES ('57', '全能骑士', 'Omniknight', 'omniknight_hphover.png');
INSERT INTO `heroavatar` VALUES ('58', '魅惑魔女', 'Enchantress', 'enchantress_hphover.png');
INSERT INTO `heroavatar` VALUES ('59', '哈斯卡', 'Huskar', 'huskar_hphover.png');
INSERT INTO `heroavatar` VALUES ('60', '暗夜魔王', 'Night Stalker', 'night_stalker_hphover.png');
INSERT INTO `heroavatar` VALUES ('61', '育母蜘蛛', 'Broodmother', 'broodmother_hphover.png');
INSERT INTO `heroavatar` VALUES ('62', '赏金猎人', 'Bounty Hunter', 'bounty_hunter_hphover.png');
INSERT INTO `heroavatar` VALUES ('63', '编织者', 'Weaver', 'weaver_hphover.png');
INSERT INTO `heroavatar` VALUES ('64', '杰奇洛', 'Jakiro', 'jakiro_hphover.png');
INSERT INTO `heroavatar` VALUES ('65', '蝙蝠骑士', 'Batrider', 'batrider_hphover.png');
INSERT INTO `heroavatar` VALUES ('66', '陈', 'Chen', 'chen_hphover.png');
INSERT INTO `heroavatar` VALUES ('67', '幽鬼', 'Spectre', 'spectre_hphover.png');
INSERT INTO `heroavatar` VALUES ('68', '远古冰魄', 'Ancient Apparition', 'ancient_apparition_hphover.png');
INSERT INTO `heroavatar` VALUES ('69', '末日使者', 'Doom', 'doom_bringer_hphover.png');
INSERT INTO `heroavatar` VALUES ('70', '熊战士', 'Ursa', 'ursa_hphover.png');
INSERT INTO `heroavatar` VALUES ('71', '裂魂人', 'Spirit Breaker', 'spirit_breaker_hphover.png');
INSERT INTO `heroavatar` VALUES ('72', '矮人直升机', 'Gyrocopter', 'gyrocopter_hphover.png');
INSERT INTO `heroavatar` VALUES ('73', '炼金术士', 'Alchemist', 'alchemist_hphover.png');
INSERT INTO `heroavatar` VALUES ('74', '祈求者', 'Invoker', 'invoker_hphover.png');
INSERT INTO `heroavatar` VALUES ('75', '沉默术士', 'Silencer', 'silencer_hphover.png');
INSERT INTO `heroavatar` VALUES ('76', '殁境神蚀者', 'Outworld Devourer', 'obsidian_destroyer_hphover.png');
INSERT INTO `heroavatar` VALUES ('77', '狼人', 'Lycan', 'lycan_hphover.png');
INSERT INTO `heroavatar` VALUES ('78', '酒仙', 'Brewmaster', 'brewmaster_hphover.png');
INSERT INTO `heroavatar` VALUES ('79', '暗影恶魔', 'Shadow Demon', 'shadow_demon_hphover.png');
INSERT INTO `heroavatar` VALUES ('80', '德鲁伊', 'Lone Druid', 'lone_druid_hphover.png');
INSERT INTO `heroavatar` VALUES ('81', '混沌骑士', 'Chaos Knight', 'chaos_knight_hphover.png');
INSERT INTO `heroavatar` VALUES ('82', '米波', 'Meepo', 'meepo_hphover.png');
INSERT INTO `heroavatar` VALUES ('83', '树精卫士', 'Treant Protector', 'treant_hphover.png');
INSERT INTO `heroavatar` VALUES ('84', '食人魔魔法师', 'Ogre Magi', 'ogre_magi_hphover.png');
INSERT INTO `heroavatar` VALUES ('85', '不朽尸王', 'Undying', 'undying_hphover.png');
INSERT INTO `heroavatar` VALUES ('86', '拉比克', 'Rubick', 'leshrac_hphover.png');
INSERT INTO `heroavatar` VALUES ('87', '干扰者', 'Disruptor', 'disruptor_hphover.png');
INSERT INTO `heroavatar` VALUES ('88', '司夜刺客', 'Nyx Assassin', 'nyx_assassin_hphover.png');
INSERT INTO `heroavatar` VALUES ('89', '娜迦海妖', 'Naga Siren', 'naga_siren_hphover.png');
INSERT INTO `heroavatar` VALUES ('90', '光之守卫', 'Keeper of the Light', 'keeper_of_the_light_hphover.png');
INSERT INTO `heroavatar` VALUES ('91', '艾欧', 'Io', 'wisp_hphover.png');
INSERT INTO `heroavatar` VALUES ('92', '维萨吉', 'Visage', 'visage_hphover.png');
INSERT INTO `heroavatar` VALUES ('93', '斯拉克', 'Slark', 'slark_hphover.png');
INSERT INTO `heroavatar` VALUES ('94', '美杜莎', 'Medusa', 'medusa_hphover.png');
INSERT INTO `heroavatar` VALUES ('95', '巨魔战将', 'Troll Warlord', 'troll_warlord_hphover.png');
INSERT INTO `heroavatar` VALUES ('96', '半人马战行者', 'Centaur Warrunner', 'centaur_hphover.png');
INSERT INTO `heroavatar` VALUES ('97', '马格纳斯', 'Magnus', 'magnataur_hphover.png');
INSERT INTO `heroavatar` VALUES ('98', '伐木机', 'Timbersaw', 'shredder_hphover.png');
INSERT INTO `heroavatar` VALUES ('99', '钢背兽', 'Bristleback', 'bristleback_hphover.png');
INSERT INTO `heroavatar` VALUES ('100', '巨牙海民', 'Tusk', 'tusk_hphover.png');
INSERT INTO `heroavatar` VALUES ('101', '天怒法师', 'Skywrath Mage', 'skywrath_mage_hphover.png');
INSERT INTO `heroavatar` VALUES ('102', '亚巴顿', 'Abaddon', 'abaddon_hphover.png');
INSERT INTO `heroavatar` VALUES ('103', '上古巨神', 'Elder Titan', 'elder_titan_hphover.png');
INSERT INTO `heroavatar` VALUES ('104', '军团指挥官', 'Legion Commander', 'legion_commander_hphover.png');
INSERT INTO `heroavatar` VALUES ('105', '工程师', 'Techies', 'techies_hphover.png');
INSERT INTO `heroavatar` VALUES ('106', '灰烬之灵', 'Ember Spirit', 'ember_spirit_hphover.png');
INSERT INTO `heroavatar` VALUES ('107', '大地之灵', 'Earth Spirit', 'earth_spirit_hphover.png');
INSERT INTO `heroavatar` VALUES ('108', '孽主', 'Underlord', 'abyssal_underlord_hphover.png');
INSERT INTO `heroavatar` VALUES ('109', '恐怖利刃', 'Terrorblade', 'terrorblade_hphover.png');
INSERT INTO `heroavatar` VALUES ('110', '凤凰', 'Phoenix', 'phoenix_hphover.png');
INSERT INTO `heroavatar` VALUES ('111', '神谕者', 'Oracle', 'oracle_hphover.png');
INSERT INTO `heroavatar` VALUES ('112', '寒冬飞龙', 'Winter Wyvern', 'winter_wyvern_hphover.png');
INSERT INTO `heroavatar` VALUES ('113', '天穹守望者', 'Arc Warden', 'arc_warden_hphover.png');
INSERT INTO `heroavatar` VALUES ('114', '齐天大圣', 'Monkey King', 'monkey_king_hphover.png');
INSERT INTO `heroavatar` VALUES ('119', '邪影芳灵', 'Dark Willow', 'dark_willow_hphover.png');
INSERT INTO `heroavatar` VALUES ('120', '石鳞剑士', 'Pangolier', 'pangolier_hphover.png');
