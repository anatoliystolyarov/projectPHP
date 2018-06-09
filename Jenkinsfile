pipeline {
  agent none
  stages {
    stage('PHP Push') {
      parallel {
        stage('Docker Push') {
          steps {
            git 'https://github.com/anatoliystolyarov/docker-compose.git'
            sh '''docker-compose build 
echo build succesful'''
          }
        }
        stage('Docker Push ') {
          steps {
            git(url: 'https://github.com/anatoliystolyarov/docker-compose.git', branch: 'master')
            sh 'echo Succesfull'
          }
        }
      }
    }
    stage('Docker up') {
      steps {
        sh 'docker-compose up '
      }
    }
  }
}