pipeline {
  agent none
  stages {
    stage('Docker Push') {
      steps {
        git(url: 'https://github.com/anatoliystolyarov/docker-compose.git', branch: 'master')
        sh '''docker-compose build 
echo build succesful'''
      }
    }
    stage('Docker up') {
      steps {
        sh 'docker-compose up '
      }
    }
  }
}