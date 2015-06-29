<?php
namespace legoboy\blockchanger;
use pocketmine\block\Block;
use pocketmine\plugin\PluginBase;
use pocketmine\level\Position;
use pocketmine\utils\Config;
class Main extends PluginBase{
  public function onEnable(){
  	$this->saveDefaultConfig();
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($this->getConfig()->get("1"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STONE, 0), Block::get(Block::IRON_ORE, 15)]), $this->getConfig()->get("ticks"), $this->getConfig()->get("ticks"));
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($this->getConfig()->get("2"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STONE, 0), Block::get(Block::IRON_ORE, 15)]), $this->getConfig()->get("ticks"), $this->getConfig()->get("ticks"));
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($this->getConfig()->get("3"), $this->getServer()->getDefaultLevel()), [Block::get(Block::IRON_ORE, 0), Block::get(Block::STONE, 15)]), $this->getConfig()->get("ticks"), $this->getConfig()->get("ticks"));
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($this->getConfig()->get("4"), $this->getServer()->getDefaultLevel()), [Block::get(Block::COAL_ORE, 0), Block::get(Block::STONE, 15)]), $this->getConfig()->get("ticks"), $this->getConfig()->get("ticks"));
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($this->getConfig()->get("5"), $this->getServer()->getDefaultLevel()), [Block::get(Block::IRON_ORE, 0), Block::get(Block::COAL_ORE, 15)]), $this->getConfig()->get("ticks"), $this->getConfig()->get("ticks"));
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($this->getConfig()->get("6"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STONE, 0), Block::get(Block::IRON_ORE, 15)]), $this->getConfig()->get("ticks"), $this->getConfig()->get("ticks"));
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($this->getConfig()->get("7"), $this->getServer()->getDefaultLevel()), [Block::get(Block::IRON_ORE, 0), Block::get(Block::STONE, 15)]), $this->getConfig()->get("ticks"), $this->getConfig()->get("ticks"));
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($this->getConfig()->get("8"), $this->getServer()->getDefaultLevel()), [Block::get(Block::COAL_ORE, 0), Block::get(Block::STONE, 15)]), $this->getConfig()->get("ticks"), $this->getConfig()->get("ticks"));
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($this->getConfig()->get("9"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STONE, 0), Block::get(Block::IRON_BLOCK, 15)]), $this->getConfig()->get("ticks"), $this->getConfig()->get("ticks"));
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($this->getConfig()->get("10"), $this->getServer()->getDefaultLevel()), [Block::get(Block::GOLD_ORE, 0), Block::get(Block::STONE, 15)]), $this->getConfig()->get("ticks"), $this->getConfig()->get("ticks"));
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($this->getConfig()->get("11"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STONE, 0), Block::get(Block::IRON_ORE, 15)]), $this->getConfig()->get("ticks"), $this->getConfig()->get("ticks"));
    $this->getServer()->getScheduler()->scheduleDelayedRepeatingTask(new ChangeBlockTask($this, new Position($this->getConfig()->get("12"), $this->getServer()->getDefaultLevel()), [Block::get(Block::STONE, 0), Block::get(Block::IRON_BLOCK, 15)]), $this->getConfig()->get("ticks"), $this->getConfig()->get("ticks"));
  }
}
