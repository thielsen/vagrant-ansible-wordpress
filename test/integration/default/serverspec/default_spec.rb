require 'spec_helper'

describe 'nginx installation' do

  context package('nginx') do
    it { should be_installed }
  end

  context service('nginx') do
    it { should be_running }
  end

end

describe 'mysql installation' do

  context package("mysql-server-5.6") do
    it { should be_installed }
  end

  context service('mysql') do
    it { should be_running }
  end

end

describe 'php installation' do

  context package('php') do
    it { should be_installed }
  end

  context service('php7.0-fpm') do
    it { should be_running }
  end

  context command('php --version') do
    its (:stdout) { should contain 'PHP 7' }
  end
end
