<?php

namespace Docker\API\Model;

class HostConfig
{
    /**
     * @var string[]
     */
    protected $binds;
    /**
     * @var string[]
     */
    protected $links;
    /**
     * @var string[]
     */
    protected $lxcConf;
    /**
     * @var int
     */
    protected $memory;
    /**
     * @var int
     */
    protected $memorySwap;
    /**
     * @var int
     */
    protected $cpuShares;
    /**
     * @var int
     */
    protected $cpuPeriod;
    /**
     * @var string
     */
    protected $cpusetCpus;
    /**
     * @var string
     */
    protected $cpusetMems;
    /**
     * @var int
     */
    protected $blkioWeight;
    /**
     * @var DeviceWeight[]
     */
    protected $blkioWeightDevice;
    /**
     * @var DeviceRate[]
     */
    protected $blkioDeviceReadBps;
    /**
     * @var DeviceRate[]
     */
    protected $blkioDeviceReadIOps;
    /**
     * @var DeviceRate[]
     */
    protected $blkioDeviceWriteBps;
    /**
     * @var DeviceRate[]
     */
    protected $blkioDeviceWriteIOps;
    /**
     * @var int
     */
    protected $memorySwappiness;
    /**
     * @var bool
     */
    protected $oomKillDisable;
    /**
     * @var PortBinding[]
     */
    protected $portBindings;
    /**
     * @var bool
     */
    protected $publishAllPorts;
    /**
     * @var bool
     */
    protected $privileged;
    /**
     * @var bool
     */
    protected $readonlyRootfs;
    /**
     * @var string[]
     */
    protected $dns;
    /**
     * @var string[]
     */
    protected $dnsSearch;
    /**
     * @var string[]
     */
    protected $extraHosts;
    /**
     * @var string[]
     */
    protected $volumesFrom;
    /**
     * @var string[]
     */
    protected $capAdd;
    /**
     * @var string[]
     */
    protected $capDrop;
    /**
     * @var RestartPolicy
     */
    protected $restartPolicy;
    /**
     * @var string
     */
    protected $networkMode;
    /**
     * @var Device[]
     */
    protected $devices;
    /**
     * @var Ulimit[]
     */
    protected $ulimits;
    /**
     * @var string[]
     */
    protected $securityOpt;
    /**
     * @var LogConfig
     */
    protected $logConfig;
    /**
     * @var string
     */
    protected $cgroupParent;

    /**
     * @return string[]
     */
    public function getBinds()
    {
        return $this->binds;
    }

    /**
     * @param string[] $binds
     *
     * @return self
     */
    public function setBinds(array $binds = null)
    {
        $this->binds = $binds;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param string[] $links
     *
     * @return self
     */
    public function setLinks(array $links = null)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getLxcConf()
    {
        return $this->lxcConf;
    }

    /**
     * @param string[] $lxcConf
     *
     * @return self
     */
    public function setLxcConf(\ArrayObject $lxcConf = null)
    {
        $this->lxcConf = $lxcConf;

        return $this;
    }

    /**
     * @return int
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * @param int $memory
     *
     * @return self
     */
    public function setMemory($memory = null)
    {
        $this->memory = $memory;

        return $this;
    }

    /**
     * @return int
     */
    public function getMemorySwap()
    {
        return $this->memorySwap;
    }

    /**
     * @param int $memorySwap
     *
     * @return self
     */
    public function setMemorySwap($memorySwap = null)
    {
        $this->memorySwap = $memorySwap;

        return $this;
    }

    /**
     * @return int
     */
    public function getCpuShares()
    {
        return $this->cpuShares;
    }

    /**
     * @param int $cpuShares
     *
     * @return self
     */
    public function setCpuShares($cpuShares = null)
    {
        $this->cpuShares = $cpuShares;

        return $this;
    }

    /**
     * @return int
     */
    public function getCpuPeriod()
    {
        return $this->cpuPeriod;
    }

    /**
     * @param int $cpuPeriod
     *
     * @return self
     */
    public function setCpuPeriod($cpuPeriod = null)
    {
        $this->cpuPeriod = $cpuPeriod;

        return $this;
    }

    /**
     * @return string
     */
    public function getCpusetCpus()
    {
        return $this->cpusetCpus;
    }

    /**
     * @param string $cpusetCpus
     *
     * @return self
     */
    public function setCpusetCpus($cpusetCpus = null)
    {
        $this->cpusetCpus = $cpusetCpus;

        return $this;
    }

    /**
     * @return string
     */
    public function getCpusetMems()
    {
        return $this->cpusetMems;
    }

    /**
     * @param string $cpusetMems
     *
     * @return self
     */
    public function setCpusetMems($cpusetMems = null)
    {
        $this->cpusetMems = $cpusetMems;

        return $this;
    }

    /**
     * @return int
     */
    public function getBlkioWeight()
    {
        return $this->blkioWeight;
    }

    /**
     * @param int $blkioWeight
     *
     * @return self
     */
    public function setBlkioWeight($blkioWeight = null)
    {
        $this->blkioWeight = $blkioWeight;

        return $this;
    }

    /**
     * @return DeviceWeight[]
     */
    public function getBlkioWeightDevice()
    {
        return $this->blkioWeightDevice;
    }

    /**
     * @param DeviceWeight[] $blkioWeightDevice
     *
     * @return self
     */
    public function setBlkioWeightDevice(array $blkioWeightDevice = null)
    {
        $this->blkioWeightDevice = $blkioWeightDevice;

        return $this;
    }

    /**
     * @return DeviceRate[]
     */
    public function getBlkioDeviceReadBps()
    {
        return $this->blkioDeviceReadBps;
    }

    /**
     * @param DeviceRate[] $blkioDeviceReadBps
     *
     * @return self
     */
    public function setBlkioDeviceReadBps(array $blkioDeviceReadBps = null)
    {
        $this->blkioDeviceReadBps = $blkioDeviceReadBps;

        return $this;
    }

    /**
     * @return DeviceRate[]
     */
    public function getBlkioDeviceReadIOps()
    {
        return $this->blkioDeviceReadIOps;
    }

    /**
     * @param DeviceRate[] $blkioDeviceReadIOps
     *
     * @return self
     */
    public function setBlkioDeviceReadIOps(array $blkioDeviceReadIOps = null)
    {
        $this->blkioDeviceReadIOps = $blkioDeviceReadIOps;

        return $this;
    }

    /**
     * @return DeviceRate[]
     */
    public function getBlkioDeviceWriteBps()
    {
        return $this->blkioDeviceWriteBps;
    }

    /**
     * @param DeviceRate[] $blkioDeviceWriteBps
     *
     * @return self
     */
    public function setBlkioDeviceWriteBps(array $blkioDeviceWriteBps = null)
    {
        $this->blkioDeviceWriteBps = $blkioDeviceWriteBps;

        return $this;
    }

    /**
     * @return DeviceRate[]
     */
    public function getBlkioDeviceWriteIOps()
    {
        return $this->blkioDeviceWriteIOps;
    }

    /**
     * @param DeviceRate[] $blkioDeviceWriteIOps
     *
     * @return self
     */
    public function setBlkioDeviceWriteIOps(array $blkioDeviceWriteIOps = null)
    {
        $this->blkioDeviceWriteIOps = $blkioDeviceWriteIOps;

        return $this;
    }

    /**
     * @return int
     */
    public function getMemorySwappiness()
    {
        return $this->memorySwappiness;
    }

    /**
     * @param int $memorySwappiness
     *
     * @return self
     */
    public function setMemorySwappiness($memorySwappiness = null)
    {
        $this->memorySwappiness = $memorySwappiness;

        return $this;
    }

    /**
     * @return bool
     */
    public function getOomKillDisable()
    {
        return $this->oomKillDisable;
    }

    /**
     * @param bool $oomKillDisable
     *
     * @return self
     */
    public function setOomKillDisable($oomKillDisable = null)
    {
        $this->oomKillDisable = $oomKillDisable;

        return $this;
    }

    /**
     * @return PortBinding[]
     */
    public function getPortBindings()
    {
        return $this->portBindings;
    }

    /**
     * @param PortBinding[] $portBindings
     *
     * @return self
     */
    public function setPortBindings(\ArrayObject $portBindings = null)
    {
        $this->portBindings = $portBindings;

        return $this;
    }

    /**
     * @return bool
     */
    public function getPublishAllPorts()
    {
        return $this->publishAllPorts;
    }

    /**
     * @param bool $publishAllPorts
     *
     * @return self
     */
    public function setPublishAllPorts($publishAllPorts = null)
    {
        $this->publishAllPorts = $publishAllPorts;

        return $this;
    }

    /**
     * @return bool
     */
    public function getPrivileged()
    {
        return $this->privileged;
    }

    /**
     * @param bool $privileged
     *
     * @return self
     */
    public function setPrivileged($privileged = null)
    {
        $this->privileged = $privileged;

        return $this;
    }

    /**
     * @return bool
     */
    public function getReadonlyRootfs()
    {
        return $this->readonlyRootfs;
    }

    /**
     * @param bool $readonlyRootfs
     *
     * @return self
     */
    public function setReadonlyRootfs($readonlyRootfs = null)
    {
        $this->readonlyRootfs = $readonlyRootfs;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getDns()
    {
        return $this->dns;
    }

    /**
     * @param string[] $dns
     *
     * @return self
     */
    public function setDns(array $dns = null)
    {
        $this->dns = $dns;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getDnsSearch()
    {
        return $this->dnsSearch;
    }

    /**
     * @param string[] $dnsSearch
     *
     * @return self
     */
    public function setDnsSearch(array $dnsSearch = null)
    {
        $this->dnsSearch = $dnsSearch;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getExtraHosts()
    {
        return $this->extraHosts;
    }

    /**
     * @param string[] $extraHosts
     *
     * @return self
     */
    public function setExtraHosts(array $extraHosts = null)
    {
        $this->extraHosts = $extraHosts;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getVolumesFrom()
    {
        return $this->volumesFrom;
    }

    /**
     * @param string[] $volumesFrom
     *
     * @return self
     */
    public function setVolumesFrom(array $volumesFrom = null)
    {
        $this->volumesFrom = $volumesFrom;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getCapAdd()
    {
        return $this->capAdd;
    }

    /**
     * @param string[] $capAdd
     *
     * @return self
     */
    public function setCapAdd(array $capAdd = null)
    {
        $this->capAdd = $capAdd;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getCapDrop()
    {
        return $this->capDrop;
    }

    /**
     * @param string[] $capDrop
     *
     * @return self
     */
    public function setCapDrop(array $capDrop = null)
    {
        $this->capDrop = $capDrop;

        return $this;
    }

    /**
     * @return RestartPolicy
     */
    public function getRestartPolicy()
    {
        return $this->restartPolicy;
    }

    /**
     * @param RestartPolicy $restartPolicy
     *
     * @return self
     */
    public function setRestartPolicy(RestartPolicy $restartPolicy = null)
    {
        $this->restartPolicy = $restartPolicy;

        return $this;
    }

    /**
     * @return string
     */
    public function getNetworkMode()
    {
        return $this->networkMode;
    }

    /**
     * @param string $networkMode
     *
     * @return self
     */
    public function setNetworkMode($networkMode = null)
    {
        $this->networkMode = $networkMode;

        return $this;
    }

    /**
     * @return Device[]
     */
    public function getDevices()
    {
        return $this->devices;
    }

    /**
     * @param Device[] $devices
     *
     * @return self
     */
    public function setDevices(array $devices = null)
    {
        $this->devices = $devices;

        return $this;
    }

    /**
     * @return Ulimit[]
     */
    public function getUlimits()
    {
        return $this->ulimits;
    }

    /**
     * @param Ulimit[] $ulimits
     *
     * @return self
     */
    public function setUlimits(array $ulimits = null)
    {
        $this->ulimits = $ulimits;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getSecurityOpt()
    {
        return $this->securityOpt;
    }

    /**
     * @param string[] $securityOpt
     *
     * @return self
     */
    public function setSecurityOpt(array $securityOpt = null)
    {
        $this->securityOpt = $securityOpt;

        return $this;
    }

    /**
     * @return LogConfig
     */
    public function getLogConfig()
    {
        return $this->logConfig;
    }

    /**
     * @param LogConfig $logConfig
     *
     * @return self
     */
    public function setLogConfig(LogConfig $logConfig = null)
    {
        $this->logConfig = $logConfig;

        return $this;
    }

    /**
     * @return string
     */
    public function getCgroupParent()
    {
        return $this->cgroupParent;
    }

    /**
     * @param string $cgroupParent
     *
     * @return self
     */
    public function setCgroupParent($cgroupParent = null)
    {
        $this->cgroupParent = $cgroupParent;

        return $this;
    }
}
